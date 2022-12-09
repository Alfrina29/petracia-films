
@extends('layouts.main')

@section('container')
<!-- Jumbotron -->
<div class="container mb-3">
  <img src="img/foto.jpg" alt="Foto" width="200" class="rounded-circle mt-5" />
  <h2 class="mt-3" style="font-family:'Mumblers Demo'; color: white;">{{ $nama }}</h2>
      <p style="color: white;">{{ $nama }}, adalah website yang dibuat pada tahun {{ $tahun }} yang digunakan untuk mencari film apapun yang ingin Anda tonton dalam berbagi genre. Selain itu, Anda juga dapat mengetahui informasi lebih lengkap tentang film tersebut.</p>
</div>
<!-- Akhir Jumbotron -->

<!-- Contact Us -->
<section id="social">
        <div class="row mb-3" style="padding : 5rem;">
          <div class="col">
            <h2 style="font-size:medium; color:white;">Contact Us</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center ikon">
          <div class="col-1">
              <p class="mt-4"><a href="mailto:petrafellicia04@gmail.com"><i class="bi bi-envelope" style="color:white;"></i></a></p>
          </div>
          <div class="col-1">
              <p class="mt-4"><a href="https://twitter.com/jinjinjaraa04"><i class="bi bi-twitter" style="color:white;"></i></a></p>
          </div>
          <div class="col-1">
              <p class="mt-4"><a href="https://www.instagram.com/petra.fellicia/"><i class="bi bi-instagram" style="color:white;"></i></a></p>
          </div>
          <div class="col-1">
              <p class="mt-4"><a href="https://wa.me/6281326714219"><i class="bi bi-whatsapp" style="color:white;"></i></a></p>
          </div>
        </div>
</section>
<!-- Akhir Contact Us -->
@endsection