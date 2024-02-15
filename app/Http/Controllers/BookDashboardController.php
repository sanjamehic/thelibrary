<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class BookDashboardController extends Controller
{

    //Book dashboard - lists all the books
    public function index()
    {
        return view('admin.book-dashboard');
    }

    //Show Create Form
    public function create() {
        return view('books.create');
    }

    //Store a Book
    public function store(Request $request) {

        $formFieldsBook = $request->validate([
            'title' => 'required',
            'original_title' => 'required',
            'slug' => ['required', Rule::unique('books', 'slug')],
            'editor' => 'nullable',
            'translator' => 'nullable',
            'print' => 'nullable',
            'isbn' => 'required',
            'summary' => 'required',
            'keywords' => 'nullable',
            'pages' => ['required', 'numeric'],
            'format_id' => ['required', Rule::exists('formats', 'id')],
            'type_id' => ['nullable', Rule::exists('types', 'id')],
            'form_id' => ['nullable', Rule::exists('forms', 'id')],
            'author_id' => ['required', Rule::exists('authors', 'id')],
            'language_id' => ['required', Rule::exists('languages', 'id')],
            'origin_id' => ['required', Rule::exists('origins', 'id')],
            'publisher_id' => ['required', Rule::exists('publishers', 'id')],
            'year_id' => ['required', Rule::exists('years', 'id')],
            'period_id' => ['nullable', Rule::exists('periods', 'id')],
            'genre_id' => ['nullable', Rule::exists('genres', 'id')], //how to make required_unless:type,Non-fiction?? //foreign key
        ]);

        if($request->hasFile('cover')) {
            $formFieldsBook['cover'] = $request->file('cover')->store('covers', 'public');
        }

        Book::create($formFieldsBook);

        return redirect('/')->with('message', 'Listing created successfully!');
    }

    //Edit a book - edit view
    public function edit(Book $book)
    {
        return view('books.edit', ['book' => $book]);
    }

    //Edit a book - edit update
    public function update(Request $request, Book $book)
    {
        $formFieldsBook = $request->validate([
            'title' => 'required',
            'original_title' => 'required',
            'slug' => 'required',
            'editor' => 'nullable',
            'translator' => 'nullable',
            'print' => 'nullable',
            'isbn' => 'required',
            'summary' => 'required',
            'keywords' => 'nullable',
            'pages' => ['required', 'numeric'],
            'format_id' => ['required', Rule::exists('formats', 'id')],
            'type_id' => ['nullable', Rule::exists('types', 'id')],
            'form_id' => ['nullable', Rule::exists('forms', 'id')],
            'author_id' => ['required', Rule::exists('authors', 'id')],
            'language_id' => ['required', Rule::exists('languages', 'id')],
            'origin_id' => ['required', Rule::exists('origins', 'id')],
            'publisher_id' => ['required', Rule::exists('publishers', 'id')],
            'year_id' => ['required', Rule::exists('years', 'id')],
            'period_id' => ['nullable', Rule::exists('periods', 'id')],
            'genre_id' => ['nullable', Rule::exists('genres', 'id')], //how to make required_unless:type,Non-fiction?? //foreign key
        ]);


        if($request->hasFile('cover')) {
            $formFieldsBook['cover'] = $request->file('cover')->store('covers', 'public');
        }

        $book->update($formFieldsBook);
        return redirect('/admin/books');
    }

    //Delete a book
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/admin/books');
    }


}
