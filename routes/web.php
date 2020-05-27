<?php

use App\Http\Controllers\GamesController;
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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function() {

    $filename = 'test.txt';


    /* Įkėlimas į diską

        Kelti failą iš request
        Prieš keliant patikrinti ar egzistuoja failas su tokiu vardu
        Leisti įkelti tik .apk .exe .zip formatus

        Atsisiuntimui išsaugot:
        failo vardą
    */
    Storage::disk('google')->put('test2.txt', 'Hello World');


    // Failo siuntimas
    $dir = '/';
    $recursive = false; // Get subdirectories?
    $contents = collect(Storage::cloud()->listContents($dir, $recursive));

    $file = $contents
        ->where('type', '=', 'file')
        ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
        ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
        ->first(); // there can be duplicate file names!

  //  return $file; // array with file info

    $rawData = Storage::cloud()->get($file['path']); // File path

    // donwload(FILE_PATH, FILE_NAME)
    return Storage::cloud()->download($file['path'],$filename);


    //return response($rawData, 200)
      //  ->header('ContentType', $file['mimetype'])
      //  ->header('Content-Disposition', "attachment; filename=$filename");



});

Route::get('/submit_game', 'GamesController@create')->middleware('auth');;

Route::get('/category/{id}', 'GamesController@showCategory')->name('games.category');
Route::get('/game/{id}', 'GamesController@show')->name('game');

Route::get('/account', function(){

   return view('pages.account');
})->middleware('auth');


Route::get('/download/{id}', 'GamesController@download')->name('downloadfile');

Route::post('/gameupload', 'GamesController@store')->name('games.store')->middleware('auth');


