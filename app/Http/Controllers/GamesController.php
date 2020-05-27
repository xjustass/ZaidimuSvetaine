<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Game;
use App\Category;
use DB;

class GamesController extends Controller
{


    public function __construct()
    {
       // $this->middleware('auth');
       // $this->middleware('auth', ['except'=>['category','game']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();


        return view('pages.submit_game',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       // $this->authorize('create', Game::class);

        // tarpinis kintamasis
       $g = $this->validateRequest();

       //priskiriamos kategorijos ir pasalinamos is request saraso
        $cats=$g['categories'];
        unset($g['categories']);

         $game = Game::create($g);

         //kiekviena kategorija irasoma i category_game lentele
        foreach($cats as $c){

            $category = Category::find($c);
            $category->games()->attach($game->id);

        }

       // $cats = $request->input('categories');
        $this->storeImage($game);
        $this->storeGameFiles($game);

        $this->game = $game;

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = Game::where('id', $id)->first();
        if ($game === null) {
            abort(404);
        }

        $categories = $game->categories;
        $photos = json_decode($game->images);

        return view('pages.about_game')->with('game',$game)->with('photos',$photos)->with('categories',$categories);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showCategory($id)
    {
        $categories = Category::All();



        $category = Category::where('id', $id)->first();

        if ($category === null) {
            abort(404);
         }
        //dd($category);


        $games = $category->games;

        //dd($games);

        $cat_name = $category->name;


        return view('pages.category')->with('games',$games)->with('category',$cat_name);
    }

    private function validateRequest()
    {

         $r = request()->validate([
            'title' => 'required|min:3',
            'description' => 'required',
            'icon' => 'required|file|image|max:8000|dimensions:ratio=1/1',
            'categories' => 'required|array|min:1',
            'game_files' => 'required|file|mimes:zip,apk,exe|max:200048',
            'screenshots' => 'required',
            'screenshots.*' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:10048'
        ]);



        //  'game_files' => 'required|file|max:5000'
        $r['user_id'] = Auth::id();
        return $r;
    }



    private function storeImage($game)
    {
        if (request()->has('icon')) {
            $game->update([
                'icon' => request()->icon->store('uploads', 'public'),
            ]);

            $image = Image::make(public_path('storage/' . $game->icon));
            //->fit(300, 300, null, 'top-left');
            $image->save();
        }

        // Saving screenshots


        if($files=request()->file('screenshots'))
        {
            $data=array();
           foreach($files as $image)
           {

               $name=$image->store('uploads', 'public');
              // dd($name);
               $img = Image::make(public_path('storage/' . $name));

               $img->save();

               $data[] = $name;

           }

           $game->images=json_encode($data);
           $game->save();
        }




    }

    private function storeGameFiles($game)
    {
        if (request()->has('game_files')) {

            $disk = Storage::disk('google');

            $sourceFile = request()->file('game_files');
            //Failas su galune
            $filenameWithExt =  $sourceFile->getClientOriginalName();
            // TIk failo vardas
            $filename= pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //TIk galune
            $extension = request()->file('game_files')->getClientOriginalExtension();

            //Failo vardas ikelimui
            $targetFile = $filename.'_'.time().'.'.$extension;


            // Duomenu atnaujinimas apie zaidima


            //Ikelimas
            $disk->put($targetFile, fopen($sourceFile, 'r+'));

            $game->game_files = $targetFile;
            $game->save();
           // $file->save();
        }
    }

    public function download($id)
    {
        $game = Game::where('id', $id)->first();
        $filename = $game->game_files;

        $dir = '/';
        $recursive = false; // Get subdirectories?
        $contents = collect(Storage::cloud()->listContents($dir, $recursive));

        $file = $contents
            ->where('type', '=', 'file')
            ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
            ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
            ->first(); // there can be duplicate file names!

        //dd($file);
        //$rawData = Storage::cloud()->get($file['path']); // File path

        // donwload(FILE_PATH, FILE_NAME)
        return Storage::cloud()->download($file['path'],$filename);

    }


}
