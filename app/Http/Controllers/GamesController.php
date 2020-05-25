<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Game;
use App\Category;

class GamesController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();
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

         //kiekviena kategorija irasma i category_game lentele
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
        //
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

 private function validateRequest()
    {

         $r = request()->validate([
            'title' => 'required|min:3',
            'description' => 'required',
            'icon' => 'required|file|image|max:8000|dimensions:ratio=1/1',
            'categories' => 'required|array|min:1',
            'game_files' => 'required|file|mimes:zip,apk,exe|max:200048'
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
            $game->game_files = $targetFile;
            $game->save();

            //Ikelimas
            $disk->put($targetFile, fopen($sourceFile, 'r+'));
           // $file->save();
        }
    }


}
