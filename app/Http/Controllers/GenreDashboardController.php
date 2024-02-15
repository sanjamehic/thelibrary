<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreDashboardController extends Controller
{
    public function index()
    {
        return view('admin.genre-dashboard');
    }
   //Create form - genre
    public function create()
    {
        return view('books.create-genre');
    }

    public function store(Request $request)
    {
        $formFieldsGenre = $request->validate([
            'name'  => 'required',
            'slug'  => 'required|unique:genres,slug',
        ]);

        Genre::create($formFieldsGenre);

            return redirect('/admin/genres')->with('message', 'Genre created successfully!');
    }
    //Edit Genre - edit view
    public function edit(Genre $genre) {
        return view('books.edit-genre', ['genre' => $genre]);
    }

    //Edit Genre - update
    public function update(Genre $genre, Request $request) {

        $formFieldsGenre = $request->validate([
            'name'  => 'required',
            'slug'  => 'required',
        ]);

        $genre->update($formFieldsGenre);
        return redirect('/admin/genres');
    }

    //Delete Genre
    public function destroy(Genre $genre)
    {
        $genre->delete();

        return redirect('/admin/genres');
    }
}
