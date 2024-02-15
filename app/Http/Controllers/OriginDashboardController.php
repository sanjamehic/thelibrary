<?php

namespace App\Http\Controllers;

use App\Models\Origin;
use Illuminate\Http\Request;

class OriginDashboardController extends Controller
{
    public function index()
    {
        return view('admin.origin-dashboard');
    }
   //Create form - Origin
    public function create()
    {
        return view('books.create-origin');
    }

    public function store(Request $request)
    {
        $formFieldsOrigin = $request->validate([
            'name'  => 'required',
            'slug'  => 'required|unique:origins,slug',
        ]);

        Origin::create($formFieldsOrigin);

            return redirect('/admin/origins')->with('message', 'Origin created successfully!');
    }
    //Edit Origin - edit view
    public function edit(Origin $origin) {
        return view('books.edit-origin', ['origin' => $origin]);
    }

    //Edit Origin - update
    public function update(Origin $origin, Request $request) {

        $formFieldsOrigin = $request->validate([
            'name'  => 'required',
            'slug'  => 'required',
        ]);

        $origin->update($formFieldsOrigin);
        return redirect('/admin/origins');
    }

    //Delete Origin
    public function destroy(Origin $origin)
    {
        $origin->delete();

        return redirect('/admin/origins');
    }
}
