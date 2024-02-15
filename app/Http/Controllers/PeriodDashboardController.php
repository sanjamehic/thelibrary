<?php

namespace App\Http\Controllers;

use App\Models\Period;
use Illuminate\Http\Request;

class PeriodDashboardController extends Controller
{
    public function index()
    {
        return view('admin.period-dashboard');
    }
   //Create form - Period
    public function create()
    {
        return view('books.create-period');
    }

    public function store(Request $request)
    {
        $formFieldsPeriod = $request->validate([
            'name'  => 'required',
            'slug'  => 'required|unique:periods,slug',
        ]);

        Period::create($formFieldsPeriod);

            return redirect('/admin/periods')->with('message', 'Period created successfully!');
    }
    //Edit Period - edit view
    public function edit(Period $period) {
        return view('books.edit-period', ['period' => $period]);
    }

    //Edit Period - update
    public function update(Period $period, Request $request) {

        $formFieldsPeriod = $request->validate([
            'name'  => 'required',
            'slug'  => 'required',
        ]);

        $period->update($formFieldsPeriod);
        return redirect('/admin/periods');
    }

    //Delete Period
    public function destroy(Period $period)
    {
        $period->delete();

        return redirect('/admin/periods');
    }
}
