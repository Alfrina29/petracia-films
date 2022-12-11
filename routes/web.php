<?php

use App\Models\Film;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;

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

Route::get('/', function () {
    return view('home', [
        "tittle" => "Home",
        "nama" => "Petracia films"
    ]);
});

Route::get('/film', [FilmController::class, 'index']);

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "nama" => "Petracia films",
        "tahun" => "2022"
    ]);
});

//halaman singel list

