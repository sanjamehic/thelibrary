<?php

use App\Http\Controllers\AuthorDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookDashboardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormatDashboardController;
use App\Http\Controllers\FormDashboardController;
use App\Http\Controllers\GenreDashboardController;
use App\Http\Controllers\LanguageDashboardController;
use App\Http\Controllers\OriginDashboardController;
use App\Http\Controllers\PeriodDashboardController;
use App\Http\Controllers\PublisherDashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TypeDashboardController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\YearDashboardController;
use App\Models\Book;
use App\Models\Author;
use App\Models\Form;
use App\Models\Format;
use App\Models\Genre;
use App\Models\Language;
use App\Models\Origin;
use App\Models\Period;
use App\Models\Publisher;
use App\Models\Type;
use App\Models\Year;

//Home - books listing
Route::get('/', [BookController::class, 'index'])->name('home');

//Single Book
Route::get('books/{book:slug}', [BookController::class, 'show']);

//Login & logout
Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::get('/logout', [SessionsController::class, 'destroy'])->middleware('auth');

//User registration
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

/* --------- ADMIN --------*/

//Dashboard
Route::get('/admin/dashboard', [DashboardController::class, 'show'])->middleware('admin');

/*--- USER---*/

//User Dashboard
Route::get('/admin/users', [UserDashboardController::class, 'index'])->middleware('admin');

//Update an user
Route::get('/admin/users/{user}/edit', [UserDashboardController::class, 'edit'])->middleware('admin');
Route::patch('/admin/users/{user}', [UserDashboardController::class, 'update'])->middleware('admin');

//Delete user
Route::delete('/admin/users/{user}', [UserDashboardController::class, 'destroy'])->middleware('admin');

/*--- BOOK---*/

//Show create form (book)
Route::get('/admin/books/create', [BookDashboardController::class, 'create'])->middleware('admin');

//Store Book
Route::post('/admin/books', [BookDashboardController::class, 'store'])->middleware('admin');

//Book dashboard
Route::get('/admin/books', [BookDashboardController::class, 'index'])->middleware('admin');

//Update a book
Route::get('/admin/books/{book:slug}/edit', [BookDashboardController::class, 'edit'])->middleware('admin');
Route::patch('/admin/books/{book:id}', [BookDashboardController::class, 'update'])->middleware('admin');

//Delete a book
Route::delete('/admin/books/{book:id}', [BookDashboardController::class, 'destroy'])->middleware('admin');

/*--- AUTHOR---*/

//Show create form (author)
Route::get('/admin/authors/create', [AuthorDashboardController::class, 'create'])->middleware('admin');

//Store Author
Route::post('/admin/authors', [AuthorDashboardController::class, 'store'])->middleware('admin');

//Authors dashboard
Route::get('/admin/authors', [AuthorDashboardController::class, 'index'])->middleware('admin');

//Update an Author
Route::get('/admin/authors/{author:slug}/edit', [AuthorDashboardController::class, 'edit'])->middleware('admin');
Route::patch('/admin/authors/{author:id}', [AuthorDashboardController::class, 'update'])->middleware('admin');

//Delete an Author
Route::delete('/admin/authors/{author:id}', [AuthorDashboardController::class, 'destroy'])->middleware('admin');

/*--- PUBLISHER---*/

//Show create form (publisher)
Route::get('/admin/publishers/create', [PublisherDashboardController::class, 'create'])->middleware('admin');

//Store Publisher
Route::post('/admin/publishers', [PublisherDashboardController::class, 'store'])->middleware('admin');

//Publisher dashboard
Route::get('/admin/publishers', [PublisherDashboardController::class, 'index'])->middleware('admin');

//Update a Publisher
Route::get('/admin/publishers/{publisher:slug}/edit', [PublisherDashboardController::class, 'edit'])->middleware('admin');
Route::patch('/admin/publishers/{publisher:id}', [PublisherDashboardController::class, 'update'])->middleware('admin');

//Delete a Publisher
Route::delete('/admin/publishers/{publisher:id}', [PublisherDashboardController::class, 'destroy'])->middleware('admin');

/*--- FORMAT---*/

//Show create form (format)
Route::get('/admin/formats/create', [FormatDashboardController::class, 'create'])->middleware('admin');

//Store format
Route::post('/admin/formats', [FormatDashboardController::class, 'store'])->middleware('admin');

//Format dashboard
Route::get('/admin/formats', [FormatDashboardController::class, 'index'])->middleware('admin');

//Update a Format
Route::get('/admin/formats/{format:slug}/edit', [FormatDashboardController::class, 'edit'])->middleware('admin');
Route::patch('/admin/formats/{format:id}', [FormatDashboardController::class, 'update'])->middleware('admin');

//Delete a Format
Route::delete('/admin/formats/{format:id}', [FormatDashboardController::class, 'destroy'])->middleware('admin');

/*--- YEAR---*/

//Show create form (year)
Route::get('/admin/years/create', [YearDashboardController::class, 'create'])->middleware('admin');

//Store year
Route::post('/admin/years', [YearDashboardController::class, 'store'])->middleware('admin');

//Year dashboard
Route::get('/admin/years', [YearDashboardController::class, 'index'])->middleware('admin');

//Update a Year
Route::get('/admin/years/{year:slug}/edit', [YearDashboardController::class, 'edit'])->middleware('admin');
Route::patch('/admin/years/{year:id}', [YearDashboardController::class, 'update'])->middleware('admin');

//Delete a Year
Route::delete('/admin/years/{year:id}', [YearDashboardController::class, 'destroy'])->middleware('admin');

/*--- LANGUAGE---*/

//Show create form (language)
Route::get('/admin/languages/create', [LanguageDashboardController::class, 'create'])->middleware('admin');

//Store language
Route::post('/admin/languages', [LanguageDashboardController::class, 'store'])->middleware('admin');

//Language dashboard
Route::get('/admin/languages', [LanguageDashboardController::class, 'index'])->middleware('admin');

//Update a Language
Route::get('/admin/languages/{language:slug}/edit', [LanguageDashboardController::class, 'edit'])->middleware('admin');
Route::patch('/admin/languages/{language:id}', [LanguageDashboardController::class, 'update'])->middleware('admin');

//Delete a Language
Route::delete('/admin/languages/{language:id}', [LanguageDashboardController::class, 'destroy'])->middleware('admin');

/*--- TYPE---*/

//Show create form (type)
Route::get('/admin/types/create', [TypeDashboardController::class, 'create'])->middleware('admin');

//Store type
Route::post('/admin/types', [TypeDashboardController::class, 'store'])->middleware('admin');

//Type dashboard
Route::get('/admin/types', [TypeDashboardController::class, 'index'])->middleware('admin');

//Update a Type
Route::get('/admin/types/{type:slug}/edit', [TypeDashboardController::class, 'edit'])->middleware('admin');
Route::patch('/admin/types/{type:id}', [TypeDashboardController::class, 'update'])->middleware('admin');

//Delete a Type
Route::delete('/admin/types/{type:id}', [TypeDashboardController::class, 'destroy'])->middleware('admin');

/*--- FORM---*/

//Show create form (literary form)
Route::get('/admin/forms/create', [FormDashboardController::class, 'create'])->middleware('admin');

//Store Form
Route::post('/admin/forms', [FormDashboardController::class, 'store'])->middleware('admin');

//Form dashboard
Route::get('/admin/forms', [FormDashboardController::class, 'index'])->middleware('admin');

//Update a Form
Route::get('/admin/forms/{form:slug}/edit', [FormDashboardController::class, 'edit'])->middleware('admin');
Route::patch('/admin/forms/{form:id}', [FormDashboardController::class, 'update'])->middleware('admin');

//Delete a Form
Route::delete('/admin/forms/{form:id}', [FormDashboardController::class, 'destroy'])->middleware('admin');

/*--- GENRE ---*/

//Show create form (genre)
Route::get('/admin/genres/create', [GenreDashboardController::class, 'create'])->middleware('admin');

//Store Genre
Route::post('/admin/genres', [GenreDashboardController::class, 'store'])->middleware('admin');

//Genre dashboard
Route::get('/admin/genres', [GenreDashboardController::class, 'index'])->middleware('admin');

//Update a Genre
Route::get('/admin/genres/{genre:slug}/edit', [GenreDashboardController::class, 'edit'])->middleware('admin');
Route::patch('/admin/genres/{genre:id}', [GenreDashboardController::class, 'update'])->middleware('admin');

//Delete a Genre
Route::delete('/admin/genres/{genre:id}', [GenreDashboardController::class, 'destroy'])->middleware('admin');

/*--- ORIGIN ---*/

//Show create form (Origin)
Route::get('/admin/origins/create', [OriginDashboardController::class, 'create'])->middleware('admin');

//Store Origin
Route::post('/admin/origins', [OriginDashboardController::class, 'store'])->middleware('admin');

//Origin dashboard
Route::get('/admin/origins', [OriginDashboardController::class, 'index'])->middleware('admin');

//Update a Origin
Route::get('/admin/origins/{origin:slug}/edit', [OriginDashboardController::class, 'edit'])->middleware('admin');
Route::patch('/admin/origins/{origin:id}', [OriginDashboardController::class, 'update'])->middleware('admin');

//Delete a Origin
Route::delete('/admin/origins/{origin:id}', [OriginDashboardController::class, 'destroy'])->middleware('admin');

/*--- HISTORICAL PERIOD ---*/

//Show create form (Period)
Route::get('/admin/periods/create', [PeriodDashboardController::class, 'create'])->middleware('admin');

//Store Period
Route::post('/admin/periods', [PeriodDashboardController::class, 'store'])->middleware('admin');

//Period dashboard
Route::get('/admin/periods', [PeriodDashboardController::class, 'index'])->middleware('admin');

//Update a Period
Route::get('/admin/periods/{period:slug}/edit', [PeriodDashboardController::class, 'edit'])->middleware('admin');
Route::patch('/admin/periods/{period:id}', [PeriodDashboardController::class, 'update'])->middleware('admin');

//Delete a Period
Route::delete('/admin/periods/{period:id}', [PeriodDashboardController::class, 'destroy'])->middleware('admin');



/*
Route::get('admin/books', [BookController::class, 'index'])->middleware('admin');
Route::get('admin/books/{book}/edit', [BookController::class, 'edit'])->middleware('admin');
Route::patch('admin/books/{book}', [BookController::class, 'update'])->middleware('admin');
Route::delete('admin/books/{book}', [BookController::class, 'destroy'])->middleware('admin');
*/


//Filters

// Route::get('types/{type:slug}', function (Type $type) {
//     return view ('books', [
//         'books' => $type->books,
//         'types' => Type::all()
//     ]);
// })->name('type');

// Route::get('formats/{format:slug}', function (Format $format){
//     $format->load('books.format');

//     return view ('books', [
//         'books' => $format->books,
//         'types' => Type::all(),
//         'authors' => Author::all()

//   ]);
// })->name('format');

//   Route::get('authors/{author:slug}', function (Author $author){
//     $author->load('books.author');

//     return view ('books', [
//         'books' => $author->books,
//         'types' => Type::all(),
//         'authors' => Format::all()

//   ]);
// })->name('authors');


// Route::get('periods/{period:slug}', function (Period $period){
//     return view ('books', [
//         'books' => $period->books,
//         'types' => Type::all()


//   ]);
// });

// Route::get('nationalorigins/{origin:slug}', function (Origin $origin){
//     return view ('books', [
//         'books' => $origin->books,
//         'types' => Type::all()

//   ]);
// });

// Route::get('publishers/{publisher:slug}', function (Publisher $publisher){
//     return view ('books', [
//         'books' => $publisher->books,
//         'types' => Type::all()

//   ]);
// });

// Route::get('genres/{genre:slug}', function (Genre $genre){
//     return view ('books', [
//         'books' => $genre->books,
//         'types' => Type::all()

//   ]);
// });

// Route::get('years/{year:slug}', function (Year $year) {

//     return view ('books', [
//         'books' => $year->books,
//         'types' => Type::all()
//   ]);
// });

// Route::get('literaryforms/{form:slug}', function (Form $form){
//     return view ('books', [
//         'books' => $form->books,
//         'types' => Type::all()

//   ]);
// });

// Route::get('languages/{language:slug}', function (Language $language){
//     return view ('books', [
//         'books' => $language->books,
//         'types' => Type::all()

//   ]);
// });
