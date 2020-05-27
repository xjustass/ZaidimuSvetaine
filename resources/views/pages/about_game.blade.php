@extends('layouts.app')

@section('content')
    <br>


    <div class="row justify-content-center mx-auto">


    </div>


    <div class="mx-auto" style="width: 92%">

        <div class="row justify-content-center mx-auto">

            <div class="col-xs-12 col-lg-4 col-md-6 col-xl-4">

                <div class="card-body text-center">
                    <img class="tileimage" src="{{ asset('storage/'.$game->icon) }}">
                </div>

            </div>

            <div class="col-xs-12 col-lg-4 col-md-6 col-xl-4 mt-3">

                <h1 class="textgreen" style="text-align: center">{{$game->title}}</h1>
                <h3 class="textgreen" style="text-align: center">
                    @foreach ($categories as $c)
                        {{$c->name.", "}}
                    @endforeach
                </h3>
                <br>
                <div style= "border-radius: 20px; padding: 8px; border: 3px solid #BDE626;">
                    <p class="text-white"> {{$game->description}}</p>
                </div>


            </div>
        </div>

    </div>

    <br>

    <div class="row justify-content-center mx-auto">


        <div class="col-xs-12 col-lg-12 col-md-12 col-xl-12">
            <div class="container">

                @if (count($photos) > 0)
                <div class="carousel mt-3" data-flickity='{"lazyLoad": 2, "freescroll": true }'>
                    @foreach($photos as $photo)
                        <img class="carousel-image" src=" {{ asset('storage/'.$photo) }}">
                    @endforeach
                 </div>

                @else
                <h4 class="mt-3">There are no photos</h4>
            @endif
            </div>
            <div class="card gametilecard">
                <div class="card-body text-center">
                    <div>
                    <a href="{{route('downloadfile', $game->id)}}">
                    <button type="button" class="btn btn-primary btn-lg" style="font-size: 30px ;padding: 20px 50px;background-color: #BDE626; color: #474747; border: none">Download game</button>
                    </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-lg-12 col-md-12 col-xl-12">
        </div>
    </div>

    <br>
    <br>



@endsection
