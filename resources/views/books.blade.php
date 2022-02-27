@extends('layouts/app')

@section('title', 'Halaman Books')

@section('content')
{{-- JUDUL HALAMAN --}}


{{-- BOOK CONTENT --}}
<div class="container mt-4">
    <h3 class="bg-info rounded-3"><i class="uil uil-book me-2"></i>List of Books</h3>
    <br>
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
@endsection