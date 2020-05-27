@extends('layouts.app')

@section('content')

    <!-- Banner Carousel -->


        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 tales" src="{{ asset('img/Jumpy_Banner.png') }}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5></h5>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 tales" src="{{ asset('img/Eternal_Banner.png') }}" alt="Second slide">
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    <!-- Joke Api -->
    <div>
        <br>
    </div>
    <div class="textgray" style="text-align: center; background-color:#BDE626">
        <div class="pt-3 pb-1 display: inline-block" >
            <p><strong>Joke of the day:</strong>
                <br>{{$joke}}</p>
        </div>
    </div>

    <br>
    <br>

    <!-- Game Tiles -->


        <div class="row justify-content-center mx-auto">
            @foreach ($games as $game)
            @if(count($games) < 4 )

            <div class="col-xs-12 col-lg-4 col-md-6 col-xl-2">
                <div class="card gametilecard">
                    <div class="card-body text-center">
                    <a href="{{url('/game/'.$game->id)}}">
                        <img class="tileimage" src="{{ asset('storage/'.$game->icon) }}">
                    </a>
                        <p class="card-text textgreen mt-2">{{$game->title}}</p>
                    </div>
                </div>
            </div>

            @else
            <div class="col-xs-12 col-lg-4 col-md-6 col-xl-4">
                <div class="card gametilecard">
                    <div class="card-body text-center">
                        <a href="{{url('/game/'.$game->id)}}">
                        <img class="tileimage" src="{{ asset('img/Jumpy_Icon.png') }}">
                        </a>
                        <p class="card-text textgreen pt-2 pb-3">{{$game->title}}</p>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>

    <br>

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

    <br>

@endsection
