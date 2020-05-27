@extends('layouts.app')

@section('content')


 <!-- Game Tiles -->

<h2 class="text-center textgreen my-3">{{$category}}</h2>

 <div class="card-deck mx-auto">






    </div>
    <div class="row justify-content-center mx-auto">

        @foreach ($games as $game)
            @if(count($games) < 4 )

            <div class="col-xs-12 col-lg-4 col-md-6 col-xl-2">
                <div class="card gametilecard">
                    <div class="card-body text-center">
                    <a href="{{url('/game/'.$game->id)}}">
                        <img class="tileimage" src="{{ asset('storage/'.$game->icon) }}">
                    </a>
                        <p class="card-text textgreen pt-2 pb-3">{{$game->title}}</p>
                    </div>
                </div>
            </div>

            @else
            <div class="col-xs-12 col-lg-4 col-md-6 col-xl-4">
                <div class="card gametilecard">
                    <div class="card-body text-center">
                        <img class="tileimage" src="{{ asset('img/Jumpy_Icon.png') }}">
                        <p class="card-text textgreen pt-2 pb-3">{{$game->title}}</p>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
</div>
@endsection
