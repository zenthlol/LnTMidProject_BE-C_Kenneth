<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class AppController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('home', compact('books'));
    }
}
