<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use DB;

class FilmController extends Controller
{
    public function index(Request $request)
    {
        
        return view('film', [
            "tittle" => "Daftar Film",
            "lists" =>  DB::table('films')->join('genres','films.genre_id','=','genres.id')->where('genres.genre','like','%'.$request->search.'%')->orWhere('films.tittle','like','%'.$request->search.'%')->get()
        ]);
    }
}
