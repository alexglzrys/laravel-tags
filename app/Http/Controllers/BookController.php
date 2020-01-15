<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests\BookCreateRequest;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('id', 'DESC')->get();
        return view('index', compact('books'));
    }

    public function store(BookCreateRequest $request)
    {
        // Inspeccinar la petición enviada por el navegador, para saber como guardar la información.
        // dd($request->all());

        // Generar un array de etiquetas a partir de la cadena enviada por el formulario
        $tags = explode(',', $request->tags);
        // Registrar un libro
        $book = Book::create($request->only('name', 'description'));
        // Asociar el sistema de etiquetas al libro registrado
        $book->tag($tags);

        return back()->with('info', 'Libro registrado correctamente en el sistema');
    }
}
