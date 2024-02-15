<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormDashboardController extends Controller
{
    public function index()
    {
        return view('admin.form-dashboard');
    }
   //Create form - form
    public function create()
    {
        return view('books.create-form');
    }

    public function store(Request $request)
    {
        $formFieldsForm = $request->validate([
            'name'  => 'required',
            'slug'  => 'required|unique:forms,slug',
        ]);

        Form::create($formFieldsForm);

            return redirect('/admin/forms')->with('message', 'Form created successfully!');
    }
    //Edit Form - edit view
    public function edit(Form $form) {
        return view('books.edit-form', ['form' => $form]);
    }

    //Edit Form - update
    public function update(Form $form, Request $request) {

        $formFieldsForm = $request->validate([
            'name'  => 'required',
            'slug'  => 'required',
        ]);

        $form->update($formFieldsForm);
        return redirect('/admin/forms');
    }

    //Delete Form
    public function destroy(Form $form)
    {
        $form->delete();

        return redirect('/admin/forms');
    }
}
