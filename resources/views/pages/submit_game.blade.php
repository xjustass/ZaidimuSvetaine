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
                            <div class="row">
                                <div class="col-xs-12 col-lg-5 col-md-12 col-xl-5">
                                    <div class="form-group row">
                                        <label style ="color:#474747; font-weight: bold" for="exampleFormControlTextarea1">Game title:</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label style ="color:#474747; font-weight: bold" for="exampleFormControlSelect2">Select categories:</label>
                                        <select multiple class="form-control" id="exampleFormControlSelect2">
                                            <option>Platformer</option>
                                            <option>Strategy</option>
                                            <option>First person shooter</option>
                                            <option>Dar koks nors</option>
                                            <option>Dar koks nors</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label style ="color:#474747; font-weight: bold" for="exampleFormControlFile1">Upload icon:</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>

                                <div class="col-1"></div>

                                <div class="col-xs-12 col-lg-6 col-md-12 col-xl-6">
                                    <div class="form-group row">
                                        <label style ="color:#474747; font-weight: bold" style ="color:#474747; font-weight: bold" for="exampleFormControlTextarea1">Description:</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
                                    </div>

                                    <label style ="color:#474747; font-weight: bold" for="exampleFormControlFile1">Upload game files:</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose a file...</label>
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
@endsection

