@extends('layouts.app')

@section('content')

    <div class="container" style="text-align: center">
        <br>
        <h1 class="textgreen">My Account</h1>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card" style=" border-radius: 25px; padding: 8px; border: 5px solid #BDE626; background-color:#474747;" >
                    <div class="card-header textgray" style="text-align: center; border: none;background: #BDE626; font-weight: bold; font-size: 300%; border-top-left-radius: 15px;  border-top-right-radius: 15px"></div>

                    <div class="card-body" style="background: #BDE626; border-bottom-left-radius: 15px;  border-bottom-right-radius: 15px">
                        <div class="row">
                            <div class="col-md-5 col-xs-12"><img style="border-radius: 10%; padding: 4px; margin: 0px;border: 5px solid #474747;background-color:#BDE626;object-fit: cover;width:250px" src="{{ asset('img/deivis.jpg') }}"></div>

                            <div class="col-md-4 col-xs-12 text-left">
                                <h3 class="pt-5 pl-1 textgray" style="font-weight: bold">Username</h3>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mt-3" style="font-weight: bold; background: #BDE626 ;border: 5px solid #474747; color: #474747">
                                        My Games
                                    </button>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mt-3" style="font-weight: bold; background: #BDE626 ;border: 5px solid #474747; color: #474747">
                                        Change Password
                                    </button>
                                </div>
                            </div>

                        </div>
                        <br>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>


@endsection
