@extends('main')
@section('container')
<section id="" class="p-5">
<div class="container">
    <div class="row">
        @foreach ($berita as $detil_berita)
        <div class="col-md-4 mb-3">
            <div class="card">
                {{-- <img src="/img/{{ $detil_berita->foto }}" class="card-img-top" alt="..."> --}}
                <img src="{{ asset('storage/' . $detil_berita->foto) }}">
                <div class="card-body">
                  <h5 class="card-title"><a href="/berita/{{ $detil_berita->slug }}" style="color: rgb(32,150,110)">{{$detil_berita->judul_berita}}</a></h5>
                  <p class="card-text">{{$detil_berita->excerpt}}</p>
                  <div class="text-end">
                  <a href="/berita/{{ $detil_berita->slug }}" class="btn btn-success">Detil Berita</a>
                </div>
            </div>
        </div>
        </div>
        @endforeach
    </div>
</div>
</section>   
@endsection
  