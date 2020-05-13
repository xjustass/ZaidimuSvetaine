<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Joke;

class PagesController extends Controller
{
    public function index(){

        //--Zaidimu statistika--

        //gta v
        $game1 = simplexml_load_file('https://api.steampowered.com/ISteamUserStats/GetNumberOfCurrentPlayers/v1/?appid=271590&format=xml');
        //cs gp
        $game2 = simplexml_load_file('https://api.steampowered.com/ISteamUserStats/GetNumberOfCurrentPlayers/v1/?appid=730&format=xml');
        //Rust
        $game3 = simplexml_load_file('https://api.steampowered.com/ISteamUserStats/GetNumberOfCurrentPlayers/v1/?appid=252490&format=xml');
        //Teraria
        $game4 = simplexml_load_file('https://api.steampowered.com/ISteamUserStats/GetNumberOfCurrentPlayers/v1/?appid=105600&format=xml');
        //Mount and blade
        $game5 = simplexml_load_file('https://api.steampowered.com/ISteamUserStats/GetNumberOfCurrentPlayers/v1/?appid=261550&format=xml');





            //-Joke--

            $joke1 = Joke::find(1)->joke;




            $data = array(
                'game1_count'=> $game1->player_count,
                'game2_count'=>$game2->player_count,
                'game3_count'=>$game3->player_count,
                'game4_count'=>$game4->player_count,
                'game5_count'=>$game5->player_count,
                'joke'=>$joke1
                );

       // return view('pages.index', compact('game1_count'));

        return view('pages.index')->with($data);
    }

    public function about(){
        return view('pages.about');
    }

    public function submit_game(){
        return view('pages.submit_game');
    }
}
