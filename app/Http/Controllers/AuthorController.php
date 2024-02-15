<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthorController extends Controller
{
    public function store(Request $request) {

        $attributes = request()->validate([
            'name' => 'required',
            'alias' => 'nullable',
            'slug' => ['required', Rule::unique('authors', 'slug')],
            'origin' => ['nullable', Rule::exists('origin', 'id')],
            'period' => ['nullable', Rule::exists('period', 'id')],
            'language' => ['nullable', Rule::exists('language', 'id')]

            //make select menu when entering author for origin, period and language

        ]);

        Author::create($attributes);

        return redirect('/')->with('message', 'Author created successfully!');
    }
}
