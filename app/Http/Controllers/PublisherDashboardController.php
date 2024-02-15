<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherDashboardController extends Controller
{
     //Lists all the publishers
     public function index() {
        return view('admin.publisher-dashboard');
    }

    //Create form - publisher
    public function create() {
        return view('books.create-publisher');
    }

    //Store a Publisher
    public function store(Request $request) {

        $formFieldsPublisher = $request->validate([
            'name'  => 'required',
            'slug'  => 'required|unique:publishers,slug',
            'place'  => 'nullable',
        ]);

        Publisher::create($formFieldsPublisher);

            return redirect('/')->with('message', 'Publisher created successfully!');
        }

    //Edit Author - edit view
    public function edit(Publisher $publisher) {
        return view('books.edit-publisher', ['publisher' => $publisher]);
    }

    //Edit Author - update
    public function update(Publisher $publisher, Request $request) {

        $formFieldsPublisher = $request->validate([
            'name'  => 'required',
            'slug'  => 'required',
            'place'  => 'nullable',
        ]);

        $publisher->update($formFieldsPublisher);
        return redirect('/admin/publishers');
    }

    //Delete publisher
    public function destroy(Publisher $publisher)
    {
        $publisher->delete();

        return redirect('/admin/publishers');
    }
}
