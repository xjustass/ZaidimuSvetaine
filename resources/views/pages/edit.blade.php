@extends('layouts.app')

@section('content')
    <br>
    <h1 class="textgreen" style="text-align: center">Edit game data</h1>
    <br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style=" border-radius: 25px;
    padding: 8px;
    border: 5px solid #BDE626;
    background-color:#474747;" >
                    <div class="card-header" style="text-align: left; border: none;background: #BDE626; font-weight: bold; font-size: 200%; border-top-left-radius: 15px;  border-top-right-radius: 15px; color:#474747">{{ __('Marketing materials:') }}</div>

                    <div class="card-body" style="background: #BDE626; border-bottom-left-radius: 15px;  border-bottom-right-radius: 15px">
                        <form action="{{ route('games.update', $game->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xs-12 col-lg-5 col-md-12 col-xl-5">
                                    <div class="form-group row">
                                        <label style ="color:#474747; font-weight: bold" for="exampleFormControlTextarea1">Game title:</label>

                                        @if ($errors->first('title'))
                                        <div class="alert alert-danger" role="alert">{{ $errors->first('title') }}</div>
                                        @endif


                                        <textarea class="form-control"  name="title"id="exampleFormControlTextarea1" rows="1">{{$game->title }}</textarea>

                                    </div>

                                </div>

                                <div class="col-1"></div>

                                <div class="col-xs-12 col-lg-6 col-md-12 col-xl-6">
                                    <div class="form-group row">
                                        <label style ="color:#474747; font-weight: bold" style ="color:#474747; font-weight: bold" for="exampleFormControlTextarea1">Description:</label>

                                        @if ($errors->first('description'))
                                        <div class="alert alert-danger" role="alert">{{ $errors->first('description') }}</div>
                                        @endif
                                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5">{{$game->description }}</textarea>
                                    </div>
                                </div>



                            </div>

                            <div><br></div>
                            <div align="right">
                            <button type="submit" class="btn btn-primary" style="background: #BDE626 ;border: 5px solid #474747; color: #474747">
                                {{ __('Submit') }}
                            </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
@endsection

