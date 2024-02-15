<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeDashboardController extends Controller
{
    public function index()
    {
        return view('admin.type-dashboard');
    }
   //Create form - type
    public function create()
    {
        return view('books.create-type');
    }

    public function store(Request $request)
    {
        $formFieldsType = $request->validate([
            'name'  => 'required',
            'slug'  => 'required|unique:types,slug',
        ]);

        Type::create($formFieldsType);

            return redirect('/admin/types')->with('message', 'Type created successfully!');
    }
    //Edit Type - edit view
    public function edit(Type $type) {
        return view('books.edit-type', ['type' => $type]);
    }

    //Edit Type - update
    public function update(Type $type, Request $request) {

        $formFieldsType = $request->validate([
            'name'  => 'required',
            'slug'  => 'required',
        ]);

        $type->update($formFieldsType);
        return redirect('/admin/types');
    }

    //Delete Type
    public function destroy(Type $type)
    {
        $type->delete();

        return redirect('/admin/types');
    }
}
