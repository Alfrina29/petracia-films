@extends('layouts.main')

@section('container')
<br></br>
<h1 class="mb-3 text-center">{{ $tittle }}</h1>
    {{-- @if ($lists->count())
<br></br>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-tittel">{{ $lists[0]->tittle }}</h3>
          <p class="card-text">Tahun Rilis : {{ $lists[0]->tahun }}</p>
          <p>Genre Film : {{ $lists[0]->genre->genre }}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@else
<p class="text-center fs-4">No Post found.</p>
@endif --}}

    @if ($lists->count())
        <br></br>
        <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <form action="/film">
                  @if (request('genre'))
                  <input type="hidden" name="genre" value="{{ request('genre') }}">   
                  @endif
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.."
                        name="search" value="{{ request('search') }}">
                    <button class="btn btn-dark" type="submit">Search</button>
                </form>
              </div>
            </div>
        </div>

        
        <div class="container">
            <div class="row">
                @foreach ($lists as $list)
                    <div class="col-md-3 m-3">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <h3 class="card-tittel">{{ $list->tittle }}</h3>
                            <p class="card-text">Tahun Rilis : {{ $list->tahun }}</p>
                            <p>Genre Film : {{ $list->genre->genre }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No Post found.</p>
    @endif
@endsection
