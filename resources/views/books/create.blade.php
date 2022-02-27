@extends('layouts/app')
@section('title', 'Create Book')

@section('content')
<div class="container">
    <div class="col-md-7 bg-light manage-wrapper">
        <h3><i class="uil uil-plus"></i>Add Book</h1>
        <p>Add the books you wanna read here !</p>
        <hr>
        <form action="{{ url('books/create') }}" method="POST">
          @csrf
            <div class="mb-3">
              <label class="form-label">Judul Buku</label>
              <input type="text" class="form-control @error('judul') is-invalid @enderror" placeholder="Masukkan Judul Buku" name="judul" value="{{ old('judul') }}">
              @error('judul') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
              <label class="form-label">Penulis</label>
              <input type="text" class="form-control" placeholder="Masukkan Nama Penulis" name="penulis" value="{{ old('penulis') }}">
              @error('penulis') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
              <label class="form-label">Jumlah Halaman</label>
              <input type="number" class="form-control" placeholder="Masukkan Jumlah Halaman" name="jumlah_halaman" value="{{ old('jumlah_halaman') }}">
              @error('jumlah_halaman') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
              <label class="form-label">Tahun Terbit</label>
              <input type="number" class="form-control" placeholder="Masukkan Tahun Terbit" name="tahun_terbit" value="{{ old('tahun_terbit') }}">
              @error('tahun_terbit') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

    </div>
</div>
@endsection