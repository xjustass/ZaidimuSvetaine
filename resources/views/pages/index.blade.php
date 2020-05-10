@extends('layouts.app')

@section('content')
    <!-- Joke Api -->
    <div>
        <br>
    </div>
    <div style="text-align: center; background-color:#BDE626">
        <div class="pt-3 pb-1 display: inline-block" >
            <p><strong>Joke of the day:</strong>
                <br>I fear my stuttering brother may never finish his prison sentence</p>
        </div>
    </div>

    <br>
    <br>

    <!-- Game Tiles -->

    <div style="margin: 0 auto; width: max-content; height: max-content; color: #FFFFFF; text-align: center; font-weight: bold">
        <div class="d-flex">
            <div class="col">
                <div class="pr-5"><img class="tileimage" height="250" width="250" src="https://www.nintendo.com/content/dam/noa/en_US/games/switch/m/mega-man-11-switch/mega-man-11-switch-hero.jpg"></div>
                <div class="pr-5">Game Title</div>
            </div>
            <div class="col">
                <div class="pr-5"><img class="tileimage" height="250" width="250" src="https://i.pinimg.com/236x/01/8f/48/018f4844e710954efeaaaaa7023886ff--mega-man-videogames.jpg"></div>
                <div class="pr-5">Game Title</div>
            </div>
            <div class="col">
                <div><img class="tileimage" height="250" width="250" src="https://i.pinimg.com/236x/5c/ff/9e/5cff9eb0ea0687ed6b3770ec5d034b4e--the-robot-mega-man.jpg"></div>
                <div>Game Title</div>
            </div>
        </div>

        <br>

        <div style="border-radius:20px ; border: 5px solid #BDE626; height: 100px; width: 900px; margin: 0 auto;">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
        </div>

        <br>

        <div style="bottom: 0; left: 0; width: 100%; height: 100px; background-color:#BDE626; vertical-align: center">
            <div class="pl-4" style="font-size: 30px;"><strong>Logo</strong></div>
        </div>
@endsection

