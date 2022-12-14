@extends('layouts.main')

@section('container')
    <br></br>
    <h1 class="mb-3 text-center" style="color: aliceblue">{{ $tittle }}</h1>
    @if ($lists->count())
        <br></br>
        <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <form action="/film" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search.." name="search"
                            value="{{ request('search') }}">
                        <button class="btn btn-dark" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($lists as $list)
                    <div class="col-md-3 m-3" style="">
                        <div class="card " style="font-family: 'Times New Roman', Times, serif ">
                            <img src="{{ $list->gambar }}" class="card-img-top" alt="...">
                            <center><h3 class="card-tittel">{{ $list->tittle }}</h3></center>
                            <p class="card-text">Tahun Rilis : {{ $list->tahun }}</p>
                            <p>Genre Film : {{ $list->genre }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <br></br>
        <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <form action="/film" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search.." name="search"
                            value="{{ request('search') }}">
                        <button class="btn btn-dark" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <p class="text-center fs-4">No Post found.</p>
    @endif

@endsection
