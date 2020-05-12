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

    <div style="margin: 0 auto; width: max-content; height: max-content; color: #FFFFFF; text-align: center; font-weight: bold">
        <div class="d-flex textgreen">
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

    <h2 class="text-center textgreen my-3"> Gamers playing right now:</h2>

    <!--<div style="border-radius:20px ; width: 1400px; margin: 0 auto; padding-top: 15px;" class="container textgreen"> -->
    <div style="margin: 0 auto; padding-top: 15px;" class="container textgreen">
        <div class="card-deck">
        <!-- Gta V -->

        <div class="row justify-content-center no-gutters">
            <div class="col-xl-2 col-lg-5 col-5 mb-3">
                <div class="card statistics-card h-100">
                <img class="card-img-top" src={{ asset('img/gta_v.jpg') }} alt="Gta v image">
                <div class="card-body">

                    <p class="card-text text-center">
                        <i class="fas fa-user icon-spacing"></i>
                        {{$game1_count}}
                    </p>

                    <h5 class="card-text text-center"> Grand Theft Auto V</h5>
                </div>
                </div>
            </div>

         <!--   Counter-Strike: Global Offensive -->
         <div class="col-xl-2 col-lg-5 col-5 mb-3 shadow-sm hover-shadow-2">
            <div class="card statistics-card h-100 ">
                <img class="card-img-top" src={{ asset('img/csgo.jpg') }} alt="Counter-Strige Global Offensive">
                <div class="card-body">

                <p class="card-text text-center">
                    <i class="fas fa-user icon-spacing"></i>
                    {{$game2_count}}
                </p>
                <h5 class="card-text text-center"> Counter-Strike: Global Offensive</h5>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-lg-5 col-5 mb-3">
            <div class="card statistics-card h-100">
                <img class="card-img-top" src={{ asset('img/rust.jpg') }} alt="Counter-Strige Global Offensive">
                <div class="card-body">

                <p class="card-text text-center">
                    <i class="fas fa-user icon-spacing"></i>
                    {{$game3_count}}
                </p>
                <h5 class="card-text text-center"> Rust</h5>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-lg-5 col-5 mb-3">
            <div class="card statistics-card h-100">

                <img class="card-img-top embed-responsive-item" src={{ asset('img/terraria.jpg') }} alt="Counter-Strige Global Offensive">
                <div class="card-body">

                <p class="card-text text-center">
                    <i class="fas fa-user icon-spacing"></i>
                    {{$game4_count}}
                </p>
                <h5 class="card-text text-center"> Terraria</h5>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-lg-5 col-5 mb-3">
            <div class="card statistics-card h-100">
                <img class="card-img-top" src={{ asset('img/mb2.jpg') }} alt="Counter-Strige Global Offensive">
                <div class="card-body">

                <p class="card-text text-center">
                    <i class="fas fa-user icon-spacing"></i>
                    {{$game5_count}}
                </p>
                <h5 class="card-text text-center"> Mount & Blade II: Bannerlord</h5>
                </div>
            </div>
        </div>

    </div>
    </div>
</div>

    <br>

    <!-- Page footer -->

    <footer class="footer mt-auto py-3 bg-custom">
        <div class="container">
            <div class="row" style="vertical-align: middle">
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

