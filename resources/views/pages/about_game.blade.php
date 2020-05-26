@extends('layouts.app')

@section('content')
    <br>
    <h1 class="textgreen" style="text-align: center">Game Title</h1>

    <div class="container my-4">

        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                <li data-target="#multi-item-example" data-slide-to="1"></li>
                <li data-target="#multi-item-example" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->

            <!--Slides-->
            <div class="tileimage w-100" style="border-radius: 10px">
                <div class="carousel-inner" role="listbox">

                    <!--First slide-->
                    <div class="carousel-item active">

                        <div class="row">
                            <div class="col-md-4">

                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                     alt="Card image cap">

                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">

                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                                     alt="Card image cap">

                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">

                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                                     alt="Card image cap">

                            </div>
                        </div>

                    </div>
                    <!--/.First slide-->

                    <!--Second slide-->
                    <div class="carousel-item">

                        <div class="row">
                            <div class="col-md-4">

                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                                     alt="Card image cap">

                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">

                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg"
                                     alt="Card image cap">

                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">

                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
                                     alt="Card image cap">

                            </div>
                        </div>

                    </div>
                    <!--/.Second slide-->

                    <!--Third slide-->
                    <div class="carousel-item">

                        <div class="row">
                            <div class="col-md-4">

                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
                                     alt="Card image cap">

                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">

                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg"
                                     alt="Card image cap">

                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">

                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg"
                                     alt="Card image cap">

                            </div>
                        </div>

                    </div>
                    <!--/.Third slide-->

                </div>
            </div>
            <!--/.Slides-->

        </div>
        <!--/.Carousel Wrapper-->


    </div>

    <div class="row justify-content-center mx-auto">
        <div class="col-xs-12 col-lg-4 col-md-6 col-xl-4">
            <h3 class="textgreen" style="text-align: center">Categories: this, this, that</h3>
            <br>
        </div>
    </div>


    <div class="mx-auto" style="width: 92%">

        <div class="row justify-content-center mx-auto">
            <div class="col-xs-12 col-lg-4 col-md-6 col-xl-4">

                <div class="card-body text-center">
                    <img class="tileimage" src="{{ asset('img/Jumpy_Icon.png') }}">
                </div>

            </div>


            <div class="col-xs-12 col-lg-6 col-md-8 col-xl-6">
                <div class="card-body text-center">
                    <div class="col-lg-10 col-xs-12 col-lg-auto col-md-12">
                        <div style= "border-radius: 20px; padding: 8px; border: 5px solid #BDE626;">
                            <p class="textlightgray">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent auctor sollicitudin tempus. Vestibulum et viverra mi. Nulla at nunc sapien. Suspendisse facilisis ullamcorper nisi, ut rhoncus tortor pellentesque quis. Ut elementum dolor eget velit sollicitudin, ac hendrerit nisi egestas. Duis facilisis laoreet justo, nec eleifend nisi tempor ut. Pellentesque tortor lectus, ultricies sit amet sem id, consectetur volutpat risus. Cras at sodales eros. Vivamus dapibus at nisl ut tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean lectus urna, aliquet vitae ligula sit amet, porta pretium dolor. Nam bibendum ante et orci consectetur, eu lacinia diam egestas. Donec a malesuada nulla. Curabitur volutpat libero in ornare molestie. Etiam a hendrerit nibh.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <br>

    <div class="row justify-content-center mx-auto">
        <div class="col-xs-12 col-lg-12 col-md-12 col-xl-12">
        </div>
        <div class="col-xs-12 col-lg-12 col-md-12 col-xl-12">
            <div class="card gametilecard">
                <div class="card-body text-center">
                    <div>
                        <button type="button" class="btn btn-primary btn-lg" style="font-size: 30px ;padding: 20px 50px;background-color: #BDE626; color: #474747; border: none">Download game</button>
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
