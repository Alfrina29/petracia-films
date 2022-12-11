<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    public function index()
    {
        return view('film', [
            "tittle" => "Daftar Film",
            "lists" => Film::latest()->get()
        ]);
    }
}
