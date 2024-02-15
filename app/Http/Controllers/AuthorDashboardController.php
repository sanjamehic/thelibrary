<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class AuthorDashboardController extends Controller
{
    //Lists all the authors
    public function index() {
        return view('admin.author-dashboard');
    }

    //Create form - author
    public function create() {
        return view('books.create-author');
    }

    //Store an Author
    public function store(Request $request) {

        $formFieldsAuthor = $request->validate([
            'name'  => 'required',
            'slug'  => 'required|unique:authors,slug',
            'alias'  => 'nullable',
            'language_id' => ['required', Rule::exists('languages', 'id')],
            'origin_id' => ['required', Rule::exists('origins', 'id')],
            'period_id' => ['nullable', Rule::exists('periods', 'id')],
            ]);

        Author::create($formFieldsAuthor);

            return redirect('/')->with('message', 'Author created successfully!');
        }

    //Edit Author - edit view
    public function edit(Author $author) {
        return view('books.edit-author', ['author' => $author]);
    }

    //Edit Author - update
    public function update(Author $author, Request $request) {

        $formFieldsAuthor = $request->validate([
            'name'  => 'required',
            'slug'  => 'required',
            'alias'  => 'nullable',
            'language_id' => ['required', Rule::exists('languages', 'id')],
            'origin_id' => ['required', Rule::exists('origins', 'id')],
            'period_id' => ['nullable', Rule::exists('periods', 'id')],
            ]);

        $author->update($formFieldsAuthor);
        return redirect('/admin/authors');
    }

    //Delete author
    public function destroy(Author $author)
    {
        $author->delete();

        return redirect('/admin/authors');
    }
}
