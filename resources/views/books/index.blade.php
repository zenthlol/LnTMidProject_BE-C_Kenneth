@extends('layouts.app')

@section('title'. 'Manage Book')

@section('content')
    <div class="container">
        <div class="col-md-8 bg-light manage-wrapper">
            <h3 ><i class="uil uil-create-dashboard me-2"></i>Manage Book</h1>
            <p>Manage your books, tidy them up!</p>
            <hr>
            <a href="{{ url('books/create') }}" class="btn btn-dark btn-sm mb-2">Add Books <i class="uil uil-plus-circle"></i></a>

            @if(session('status_sukses'))
              <div class="alert alert-success" role="alert">
                {{ session('status_sukses') }}<i class="uil uil-thumbs-up ms-1"></i>
              </div>
            @endif

            <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Jumlah Halaman</th>
                    <th>Tahun Terbit</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  {{-- @php $num = 1 @endphp --}}
                  @foreach($books as $book)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$book->judul}}</td>
                      <td>{{$book->penulis}}</td>
                      <td>{{$book->jumlah_halaman}}</td>
                      <td>{{$book->tahun_terbit}}</td>
                      <td>
                        <a href="{{ url('books/' . $book->id) }}" class="text-primary"><i class="uil uil-edit-alt"></i></a>

                        <a href="#" class="text-danger" onclick="event.preventDefault();document.getElementById('delete-form-{{ $book->id }}').submit();">
                          <i class="uil uil-trash-alt"></i>

                          <form id="delete-form-{{ $book->id }}" action="{{ url('books/' . $book->id) }}" 
                            method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                          </form>

                        </a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection