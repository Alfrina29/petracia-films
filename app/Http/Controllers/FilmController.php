<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use DB;

class FilmController extends Controller
{
    public function index(Request $request)
    {
        // $tittle = "Daftar Film";
        // $lists = DB::select("SELECT f.*, g.* FROM films as f JOIN genres as g ON f.genre_id = g.id");

        // return view('film', compact('lists', 'tittle'));
        return view('film', [
            "tittle" => "Daftar Film",
            "lists" =>  DB::table('films')->join('genres','films.genre_id','=','genres.id')->where('genres.genre','like','%'.$request->search.'%')->orWhere('films.tittle','like','%'.$request->search.'%')->get()
        ]);
    }

    public function tambahFilm(Request $request) {

        // dd($request);
        // return $request->file('gambar')->store('gambar-film');

        if($request->file('gambar')) {
            Film::create(
                [
                    'genre_id' => $request->genre_id,
                    'tittle'=> $request->tittle,
                    'tahun' => $request->tahun,
                    'gambar' => $request->file('gambar')->store('gambar-film')
                ]
            );
        } else {
            Film::create(
                [
                    'genre_id' => $request->genre_id,
                    'tittle'=> $request->tittle,
                    'tahun' => $request->tahun,
                ]
            );
        }

        return redirect('/film');
    }

    public function tambahPage() {
        $genres = DB::select("SELECT * FROM genres");

        $tittle = "Tambah";

        return view('tambah', compact('genres', 'tittle') );
    }

    public function edit($id) {
        return view('edit');
    }
}
