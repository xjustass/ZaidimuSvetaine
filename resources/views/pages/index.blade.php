@extends('layouts.app')

@section('content')
    <!-- Joke Api -->
    <div>
        <br>
    </div>
    <div class="textgray" style="text-align: center; background-color:#BDE626">
        <div class="pt-3 pb-1 display: inline-block" >
            <p><strong>Joke of the day:</strong>
                <br>I fear my stuttering brother may never finish his prison sentence</p>
        </div>
    </div>

    <br>
    <br>

    <!-- Game Tiles -->

    <div style="color: #FFFFFF; text-align: center; font-weight: bold" class="mx-auto">
        <div class="d-flex textgreen" style="width: 60%">
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
    </div>

    <br>

    <!-- Game Statistics -->

    <div style="border-radius:20px ; border: 5px solid #BDE626; height: 100px; width: 60%" class="row textgreen mx-auto">
        <div class="col-3">game stats</div>
        <div class="col-3">blip</div>
        <div class="col-3">bloop</div>
        <div class="col-3">bleep</div>
    </div>

    <br>

    <!-- Page footer -->

    <footer class="footer my-auto py-3 bg-custom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-2 textgray" style="font-size: 50px">
                    <strong>Logo</strong>
                </div>
                <div class="col-8">

                </div>
                <div class="col-2 textgray">
                    <div>Categories</div>
                    <div>About us</div>
                    <div>Sign in/Log in</div>
                    <div>My Account</div>
                </div>
            </div>
        </div>
    </footer>
@endsection

