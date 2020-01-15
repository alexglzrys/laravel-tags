<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('id', 'DESC')->get();
        return view('index', compact('books'));
    }

    public function store(Request $request)
    {

    }
}
