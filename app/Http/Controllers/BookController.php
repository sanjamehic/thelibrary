<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Format;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use phpDocumentor\Reflection\Types\Nullable;

class BookController extends Controller

{
    //Book listings
    public function index()
    {
        return view('books', [
            'books' => Book::latest()->filter(request(['search', 'type']))
            ->get(),
                'types' => Type::all(),
                'formats' => Format::all(),
                'authors' => Author::all(),
        ]);
    }
    //Shows a single book view
    public function show(Book $book)
    {
        return view('books.show', [
            'book' => $book
        ]);
    }
}

