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
                        <img class="card-img aboutsusphotos" src={{ asset('img/deivis.jpg') }} >
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
                        <img class="card-img aboutsusphotos" src={{ asset('img/deivis.jpg') }} >
                        <p class="card-text textgreen pt-3" style="font-size: 120%">Saulius Švelnys</p>
                        <p class="card-text textlightgray pb-3">Frontend Programmer</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-lg-3 col-md-6 col-xl-3">
                <div class="card gametilecard">
                    <div class="card-body text-center">
                        <img class="card-img aboutsusphotos" src={{ asset('img/deivis.jpg') }} >
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
            <p class="textlightgray">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent auctor sollicitudin tempus. Vestibulum et viverra mi. Nulla at nunc sapien. Suspendisse facilisis ullamcorper nisi, ut rhoncus tortor pellentesque quis. Ut elementum dolor eget velit sollicitudin, ac hendrerit nisi egestas. Duis facilisis laoreet justo, nec eleifend nisi tempor ut. Pellentesque tortor lectus, ultricies sit amet sem id, consectetur volutpat risus. Cras at sodales eros. Vivamus dapibus at nisl ut tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean lectus urna, aliquet vitae ligula sit amet, porta pretium dolor. Nam bibendum ante et orci consectetur, eu lacinia diam egestas. Donec a malesuada nulla. Curabitur volutpat libero in ornare molestie. Etiam a hendrerit nibh.</p>
        </div>

    </div>

@endsection

