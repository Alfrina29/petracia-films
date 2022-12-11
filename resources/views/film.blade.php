
@extends('layouts.main')

@section('container')
{{-- @if($lists->count())
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

<br></br>
<div class="container">
  <div class="row">
    @foreach ($lists as $list )
    <div class="col-md-3">
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <h3 class="card-tittel">{{ $list->tittle }}</h3>
        <p class="card-text">Tahun Rilis : {{ $list->tahun }}</p>
        <p>Genre Film : {{ $list->genre->genre }}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>


@endsection
