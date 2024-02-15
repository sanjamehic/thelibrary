<?php

namespace App\Http\Controllers;

use App\Models\Format;
use Illuminate\Http\Request;

class FormatDashboardController extends Controller
{
    //Lists all the formats
    public function index() {
        return view('admin.format-dashboard');
    }

    //Create form - format
    public function create() {
        return view('books.create-format');
    }

    //Store a Publisher
    public function store(Request $request) {

        $formFieldsFormat = $request->validate([
            'name'  => 'required',
            'slug'  => 'required|unique:formats,slug',

        ]);

        Format::create($formFieldsFormat);

            return redirect('/admin/formats')->with('message', 'Format created successfully!');
        }

    //Edit Format - edit view
    public function edit(Format $format) {
        return view('books.edit-format', ['format' => $format]);
    }

    //Edit Format - update
    public function update(Format $format, Request $request) {

        $formFieldsFormat = $request->validate([
            'name'  => 'required',
            'slug'  => 'required',
        ]);

        $format->update($formFieldsFormat);
        return redirect('/admin/formats');
    }

    //Delete Format
    public function destroy(Format $format)
    {
        $format->delete();

        return redirect('/admin/formats');
    }
}
