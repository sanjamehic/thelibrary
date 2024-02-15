<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguageDashboardController extends Controller
{
    //Lists all the languages

    public function index()
    {
        return view('admin.language-dashboard');
    }
   //Create form - language
    public function create()
    {
        return view('books.create-language');
    }

    public function store(Request $request)
    {
        $formFieldsLanguage = $request->validate([
            'name'  => 'required',
            'slug'  => 'required|unique:languages,slug',
        ]);

        Language::create($formFieldsLanguage);

            return redirect('/admin/languages')->with('message', 'Language created successfully!');
    }
    //Edit Language - edit view
    public function edit(Language $language) {
        return view('books.edit-language', ['language' => $language]);
    }

    //Edit Language - update
    public function update(Language $language, Request $request) {

        $formFieldsLanguage = $request->validate([
            'name'  => 'required',
            'slug'  => 'required',
        ]);

        $language->update($formFieldsLanguage);
        return redirect('/admin/languages');
    }

    //Delete Language
    public function destroy(Language $language)
    {
        $language->delete();

        return redirect('/admin/languages');
    }
}
