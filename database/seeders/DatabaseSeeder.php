<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Film;
use App\Models\Genre;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Genre::create([
            'genre' => 'Horor'
        ]);

        Genre::create([
            'genre' => 'Action'
        ]);

        Genre::create([
            'genre' => 'Comedy'
        ]);

        Genre::create([
            'genre' => 'Romace'
        ]);

       // Film::factory(5)->create();

        Film::create([
            'tittle' => 'KKN Desa Penari',
            'tahun' => '2022',
            'genre_id' => 1,
            'gambar' => 'https://i.ibb.co/VStpvqq/kkn.jpg'
        ]);

        Film::create([
            'tittle' => 'Avengers',
            'tahun' => '2017',
            'genre_id' => 2,
            'gambar' => 'https://i.ibb.co/ChBb11h/avenger.jpg'
        ]);


        Film::create([
            'tittle' => 'Ivana',
            'tahun' => '2022',
            'genre_id' => 1,
            'gambar' => 'https://i.ibb.co/yXKs6fC/ivanna.jpg'
        ]);

        
        Film::create([
            'tittle' => 'Ada Apa Dengan Cinta',
            'tahun' => '2002',
            'genre_id' => 4,
            'gambar' => 'https://i.ibb.co/DRG9Dpy/ada-apa.jpg'
        ]);

        Film::create([
            'tittle' => 'Yowis Ben',
            'tahun' => '2018',
            'genre_id' => 3,
            'gambar' => 'https://i.ibb.co/GTchvHT/yowis-ben.jpg'
        ]);

        Film::create([
            'tittle' => 'Cek Toko Sebelah',
            'tahun' => '2018',
            'genre_id' => 3,
            'gambar' => 'https://i.ibb.co/FwYB5mW/Cek-toko-sebelah.jpg'
        ]);
    }
}
