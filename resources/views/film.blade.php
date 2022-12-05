@extends('layouts.main')

@section('container')
<!-- Button trigger modal -->
<div class="container mt-3">

    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Daftar Film
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Daftar Film</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="">
          <div class="mb-3">
            <label for="judulFilm" class="form-label">Judul Film</label>
            <input type="text" class="form-control" id="judulFilm" name="judulFilm">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Tambah Film</button>
      </form>
      </div>
    </div>
  </div>
</div>


@endsection
