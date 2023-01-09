@extends('dashboard.main')
@section('container')
    <div class="content-header">
        <div class="card-body" style="margin-top: -4em">
            <article>
                <img src="{{ asset('storage/' . $berita->foto) }}">
                <h4 class="mb-3">{{ $berita->judul_berita }}</h4><hr style="background-color : white">
                <p>{!! $berita->isi_berita !!}</p>
                <a href="/dashboard/berita" class="btn btn-success">Back to Page News</a>
                <a href="/dashboard/berita/{{ $berita->slug }}/edit" class="btn btn-warning">Edit</a>
                <form action="/dashboard/berita/{{ $berita->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('yakin akan menghapus data?')">Delete</button>
                </form>
            </article>
        </div>
    </div>
    @endsection