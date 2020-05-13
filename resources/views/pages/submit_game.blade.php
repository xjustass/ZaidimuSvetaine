@extends('layouts.app')

@section('content')
    <br>
    <div class= "textgreen" style="text-align: center; font-size: 300%;">
    <p>Submit your Game</p></div>
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
                        <form>
                            <div class="form-group row">
                                <label style ="color:#474747; font-weight: bold" for="exampleFormControlTextarea1">Game title:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

