@extends('layouts.app')

@section('content')

    <div class="pt-3" style="text-align: center"><h1 class="textgreen">About Us</h1></div>

    <div style="text-align: center; font-size: 120%"><p class="textlightgray pt-3">Team members:</p></div>

    <!-- Musu fotkiu game tiles -->

    <div class="card-deck mx-auto">

        <div class="row justify-content-center mx-auto" style="width: 95%">

            <div class="col-xs-12 col-lg-3 col-md-6 col-xl-3">
                <div class="card gametilecard">
                    <div class="card-body text-center">
                        <img class="card-img aboutsusphotos" src={{ asset('img/justas.jpg') }} >
                        <p class="card-text textgreen pt-3" style="font-size: 120%">Justas Arštikaitis</p>
                        <p class="card-text textlightgray pb-3">Administrator/Backend Programmer</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-lg-3 col-md-6 col-xl-3">
                <div class="card gametilecard">
                    <div class="card-body text-center">
                        <img class="card-img aboutsusphotos" src={{ asset('img/deivis.jpg') }} >
                        <p class="card-text textgreen pt-3" style="font-size: 120%">Deividas Vaitkevičius</p>
                        <p class="card-text textlightgray pb-3">Frontend Programmer</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-lg-3 col-md-6 col-xl-3">
                <div class="card gametilecard">
                    <div class="card-body text-center">
                        <img class="card-img aboutsusphotos" src={{ asset('img/saulius.jpg') }} >
                        <p class="card-text textgreen pt-3" style="font-size: 120%">Saulius Švelnys</p>
                        <p class="card-text textlightgray pb-3">Frontend Programmer</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-lg-3 col-md-6 col-xl-3">
                <div class="card gametilecard">
                    <div class="card-body text-center">
                        <img class="card-img aboutsusphotos" src={{ asset('img/goda.jpg') }} >
                        <p class="card-text textgreen pt-3" style="font-size: 120%">Goda Jurskytė</p>
                        <p class="card-text textlightgray pb-3">Webpage Designer</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Info apie mus sekcija -->

    <div class="row mx-auto mt-5 mb-5" style="width: 90%; border-radius: 20px; padding: 8px; border: 5px solid #BDE626;">

        <div class="col-12" style="font-size: 120%">
            <p class="textgreen">Goal of this website:</p>
        </div>
        <div class="col-12">
            <p class="textlightgray">This website was made as a project by a few university students. Our goal is to share our love and passion for video games as well as create a platform where students could share their projects. Here students can submit their own games and try out games that were made by other students. Our main goal, however, is to get a 10 from Internet Infrastructure lecture.</p>
        </div>

    </div>
    <br>
@endsection

