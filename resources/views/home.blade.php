@extends('layouts/app')

@section('title', 'Halaman Home')

@section('content') 
{{-- Banner --}}
<div class="container banner">
    <h1>Welcome to Musang Library</h1>
    <p>Perpustakaan Buku Terpopuler Se-Indonesia!</p>

    <a href="{{ url('books/manage') }}" class="btn btn-success">Manage Books</a>
    <a href="#" class="btn btn-danger">Contact Us</a>
</div>

{{-- Content --}}
<div class="container mt-4">
    <div class="row">
        @foreach($books as $book)
        <div class="col-md-4">
            <div class="col-md-12 bg-light game-content">
                <h1 class="judul">{{$book->judul}}</h1>
                <span class="penulis badge bg-warning">{{$book->penulis}}</span>
                <p class="jumlah_halaman">{{$book->jumlah_halaman}}</p>
                <span class="tahun_terbit">Tahun Terbit: {{$book->tahun_terbit}}</span>
            </div>
        </div>
        @endforeach
    </div>
</div>




    {{-- @foreach($books as $book)
    
        <div class="bg-primary mb-3">
            <h1>{{$book->judul}}</h1>
            <span>{{$book->penulis}}</span>
            <p>{{$book->jumlah_halaman}}</p>
            <span>{{$book->tahun_terbit}}</span>
        </div>
    @endforeach --}}
@endsection
  