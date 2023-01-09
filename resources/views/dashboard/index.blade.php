@extends('dashboard.main')
@section('container')
    <div class="content-header">
        <div class="container-fluid" style="margin-top: -4em">
            <div class="col-sm-12 mb-4">
              <h1 class="m-0">Selamat Datang - {{ auth()->user()->name }}</h1>
            </div>
            <div class="row mb-2">
              <div class="col-sm-8">
                <div class="alert alert-info" role="alert">
                  * Halaman ini digunakan untuk mengelola <a href="#" class="alert-link">Data Pengguna</a>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="alert alert-success" role="alert">
                  * Mengelola <a href="#" class="alert-link">Data Kategori</a>
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-sm-4">
                <div class="alert alert-secondary" role="alert">
                  * Mengelola <a href="#" class="alert-link">Data Berita</a>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="alert alert-primary" role="alert">
                  * Pengguna Dapat Melakukan Penambahan <a href="#" class="alert-link">Data</a>
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col-sm-8">
                <div class="alert alert-danger" role="alert">
                  * Pengguna Dapat Melakukan Perubahan <a href="#" class="alert-link">Data</a>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="alert alert-light" role="alert">
                  * Dan masih Banyak Lagi <a href="#" class="alert-link">Yang Lainnya</a>
                </div>
              </div>
            </div>
        </div>
      </div>
@endsection