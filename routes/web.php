<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/film', function () {
    $daftar_film = [
        [
            "tittle" => "Avangers",
            "tahun" => "2017",
            "genre" => "Action"
        ],
        [
            "tittle" => "KKN Desa Penari",
            "tahun" => "2022",
            "genre" => "Horor"
        ]
    ];
    
    return view('film', [
        "tittle" => "Daftar Film",
        "list" => $daftar_film 
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "nama" => "Petracia films",
        "tahun" => "2022"
    ]);
});


