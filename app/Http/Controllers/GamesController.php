<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Support\Facades\Auth;
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

       $g = $this->validateRequest();

        $cats=$g['categories'];
        unset($g['categories']);


         $game = Game::create($g);

        foreach($cats as $c){

            $category = Category::find($c);
            $category->games()->attach($game->id);

        }

       // $cats = $request->input('categories');
        $this->storeImage($game);

        $this->game = $game;

        return redirect('/about');
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
            'icon' => 'required|file|image|max:8000',
            'categories' => 'required|array|min:1'
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

            $image = Image::make(public_path('storage/' . $game->icon))->fit(300, 300, null, 'top-left');
            $image->save();
        }
    }


}
