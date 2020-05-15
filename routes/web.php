<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/submit_game', 'PagesController@submit_game');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function() {
    $filename = 'test.txt';

    $dir = '/';
    $recursive = false; // Get subdirectories also?
    $contents = collect(Storage::cloud()->listContents($dir, $recursive));

    $file = $contents
        ->where('type', '=', 'file')
        ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
        ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
        ->first(); // there can be duplicate file names!

  //  return $file; // array with file info

    $rawData = Storage::cloud()->get($file['path']);


    return Storage::cloud()->download($file['path'],$filename);

    //return response($rawData, 200)
      //  ->header('ContentType', $file['mimetype'])
      //  ->header('Content-Disposition', "attachment; filename=$filename");




    //Storage::disk('google')->put('test.txt', 'Hello World');
});
