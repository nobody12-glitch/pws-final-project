@extends('main')
@section('container')
<section id="" class="p-5">
<div class="container">
    <div class="row">
        <div class="col-md-8 mb-3">
            <div class="card">
                <img src="{{ asset('storage/' . $db->foto) }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 style="color: rgb(32,150,110)">{{$db->judul_berita}}</a></h5>
                  <p class="card-text"><small class="text-muted">Kategori->{{$db->kategori->nama}}</small></p>
                    <p class="card-text">{!!  $db->isi_berita  !!}></p>
                    <p><a href="/berita" class="btn btn-success"> Kembali ke Berita</a></p>
                </div>
            </div>
        </div>
      <div class="col-md-4 mb-3">
        <h5 class="text-center" style="color: rgb(32, 150, 110)"> - Kolom Iklan -</h5>
        <div class="card mb-3">
          <div class="row g-0">
            <div class="card">
              <img src="/img/1.jpg" class="card-img-top" alt="...">
            </div>
          </div>
        </div>
      </div>
    </div>
        
        </div>
    </div>
</div>
</section>   
@endsection
  