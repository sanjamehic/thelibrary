<?php

namespace App\Http\Controllers;

use App\Models\Year;
use Illuminate\Http\Request;

class YearDashboardController extends Controller
{
    //Lists all the years
    public function index() {
        return view('admin.year-dashboard');
    }

    //Create form - year
    public function create() {
        return view('books.create-year');
    }

    //Store a Year
    public function store(Request $request) {

        $formFieldsYear = $request->validate([
            'year'  => 'required',
            'slug'  => 'required|unique:years,slug',

        ]);

        Year::create($formFieldsYear);

            return redirect('/admin/years')->with('message', 'Year created successfully!');
        }

    //Edit Year - edit view
    public function edit(Year $year) {
        return view('books.edit-year', ['year' => $year]);
    }

    //Edit Year - update
    public function update(Year $year, Request $request) {

        $formFieldsYear = $request->validate([
            'year'  => 'required',
            'slug'  => 'required',
        ]);

        $year->update($formFieldsYear);
        return redirect('/admin/years');
    }

    //Delete Year
    public function destroy(Year $year)
    {
        $year->delete();

        return redirect('/admin/years');
}
}
