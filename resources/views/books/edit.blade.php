<x-layout>
    <x-form-card>
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/books">Edit {{ $book->title }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="true" href="/admin/books">Book dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="true" href="/admin/books/create">Create a New Book</a>
                    </li>
                 </ul>
            </div>
                <div class="card-body">
                    <form method="POST" action="/admin/books/{{ $book->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        {{-- TITLE OF THE BOOK --}}
                        <label for="title">Title</label>
                        <input
                            name="title"
                            class="form-control mb-2"
                            type="text"
                            aria-label="title"
                            value="{{ $book->title }}">
                        @error('title')
                            <p id="error">{{$message}}</p>
                        @enderror

                        {{-- ORIGINAL TITLE OF THE BOOK --}}
                        <label for="original_title">Original title</label>
                        <input
                            name="original_title"
                            class="form-control mb-2"
                            type="text"
                            value="{{ $book->original_title }}">
                        @error('original_title')
                            <p id="error">{{$message}}</p>
                        @enderror

                        {{-- AUTHOR OF THE BOOK --}}
                        <label for="author_id">Author</label>
                        {{--should be searchable --}}
                        <select name="author_id" class="form-select mb-2" aria-label="Author">
                            @foreach (DB::table('authors')->get() as $author)
                                <option value="{{ $author->id }}">{{ $book->author->name }}</option>
                            @endforeach
                        </select>
                        @error('author')
                            <p id="error">{{$message}}</p>
                        @enderror

                        {{-- COVER UPLOAD --}}
                        <div class="mb-2">
                            <label for="cover" class="form-label">Cover Image</label>
                            <input
                            class="form-control"
                            type="file"
                            id="cover"
                            name="cover">
                            @error('cover')
                                <p id="error">{{$message}}</p>
                            @enderror
                        </div>

                        {{-- SLUG --}}
                        <label for="slug">Slug</label>
                        <input
                            name="slug"
                            class="form-control mb-2"
                            type="text"
                            aria-label="slug"
                            value="{{ $book->slug }}">
                        @error('slug')
                            <p id="error">{{$message}}</p>
                        @enderror

                        {{-- LANGUAGE --}}
                        <label for="language_id">Language</label>
                        {{--should be searchable --}}
                        <select name="language_id" class="form-select mb-2" aria-label="Language">
                            @foreach (DB::table('languages')->get() as $language)
                                <option value="{{ $language->id }}">"{{ $book->language->name }}"</option>
                            @endforeach
                        </select>
                        @error('language')
                            <p id="error">{{$message}}</p>
                        @enderror

                        {{-- EDITOR --}}
                        <label for="editor">Editor</label>
                        <input
                            name="editor"
                            class="form-control mb-2"
                            type="text"
                            aria-label="editor"
                            value="{{ $book->editor }}">
                        @error('editor')
                            <p id="error">{{$message}}</p>
                        @enderror

                        {{-- TRANSLATOR --}}
                        <label for="translator">Translator</label>
                        <input
                            name="translator"
                            class="form-control mb-2"
                            type="text"
                            aria-label="translator"
                            value="{{ $book->translator }}">
                        @error('translator')
                            <p id="error">{{$message}}</p>
                        @enderror

                        {{-- PUBLISHER --}}
                        <label for="publisher_id">Publisher</label>
                        <select name="publisher_id" class="form-select mb-2" aria-label="Publisher">
                            @foreach (DB::table('publishers')->get() as $publisher)
                            <option value="{{ $publisher->id }}">"{{ $book->publisher->name }}"</option>
                                </a>
                            @endforeach
                        </select>
                        @error('publisher')
                            <p id="error">{{$message}}</p>
                        @enderror

                        {{-- YEAR --}}
                        <label for="year_id">Year of publishing</label>
                        <select name="year_id" class="form-select mb-2" aria-label="Year">
                            @foreach (DB::table('years')->get() as $year)
                            <option value="{{ $year->id }}">{{ $book->year->year }}</option>
                                </a>
                            @endforeach
                        </select>
                        @error('year')
                            <p id="error">{{$message}}</p>
                        @enderror

                        {{-- PRINT --}}
                        <label for="print">Print</label>
                        <input name="print" class="form-control mb-2" type="text" aria-label="print" value="{{ $book->print }}">
                        @error('print')
                            <p id="error">{{$message}}</p>
                        @enderror

                        {{-- PAGES --}}
                        <label for="pages">Pages</label>
                        <input name="pages" class="form-control mb-2" type="text" aria-label="pages" value="{{ $book->pages }}">
                        @error('pages')
                            <p id="error">{{$message}}</p>
                        @enderror

                        {{-- FORMAT --}}
                        <label for="format_id">Format</label>
                        <select name="format_id" class="form-select mb-2" aria-label="Format">
                            @foreach (DB::table('formats')->get() as $format)
                                <option value="{{ $format->id }}">{{ $book->format->name }}</option>
                            @endforeach
                        </select>
                        @error('format')
                            <p id="error">{{$message}}</p>
                        @enderror

                        {{-- TYPE --}}
                        <label for="type_id">Type</label>
                        <select name="type_id" class="form-select mb-2" aria-label="Type">
                            @foreach (DB::table('types')->get() as $type)
                                <option value="{{ $type->id }}">{{ $book->type->name }}</option>
                            @endforeach
                        </select>
                        @error('type')
                            <p id="error">{{$message}}</p>
                        @enderror

                        {{-- ISBN --}}
                        <label for="isbn">ISBN</label>
                        <input
                            name="isbn"
                            class="form-control mb-2"
                            type="text" aria-label="isbn"
                            value="{{ $book->isbn }}">
                        @error('isbn')
                            <p id="error">{{$message}}</p>
                        @enderror

                          {{-- FORM --}}
                          <label for="form_id">Form</label>
                          <select name="form_id" class="form-select mb-2" aria-label="Form">
                            @foreach (DB::table('forms')->get() as $form)
                                <option value="{{ $form->id }}">{{ $book->form->name }}</option>
                            @endforeach
                          </select>
                          @error('form')
                              <p id="error">{{$message}}</p>
                          @enderror

                        {{-- ORIGIN --}}
                        <label for="origin_id">Origin</label>
                        <select name="origin_id" class="form-select mb-2" aria-label="Origin">
                            @foreach (DB::table('origins')->get() as $origin)
                                <option value="{{ $origin->id }}">{{ $book->origin->name }}</option>
                            @endforeach
                        </select>
                        @error('origin')
                            <p id="error">{{$message}}</p>
                        @enderror

                        {{-- PERIOD --}}
                        <label for="period_id">Historical period</label>
                        <select name="period_id" class="form-select mb-2" aria-label="Period">
                            @foreach (DB::table('periods')->get() as $period)
                                <option value="{{ $period->id }}">{{ $book->period->name }}</option>
                            @endforeach
                        </select>
                        @error('period')
                            <p id="error">{{$message}}</p>
                        @enderror

                        {{-- GENRE --}}
                        <label for="genre_id">Genre</label>
                        <select name="genre_id" class="form-select mb-2" aria-label="Genre">
                            @foreach (DB::table('genres')->get() as $genre)
                                <option value="{{ $genre->id }}">{{ $book->genre->name }}</option>
                            @endforeach
                        </select>
                        @error('genre')
                            <p id="error">{{$message}}</p>
                        @enderror

                        {{-- KEYWORDS --}}
                        <label for="keyword_id">Keywords</label>
                        <input name="keyword_id" class="form-control mb-2" type="text" aria-label="keywords" value="{{ $book->keywords }}">
                        @error('keywords')
                            <p id="error">{{$message}}</p>
                        @enderror

                        {{-- SUMMARY --}}
                        <div class="mb-3">
                            <label for="summary" class="form-label">Summary</label>
                            <textarea
                                name="summary"
                                class="form-control"
                                id="summary"
                                rows="6"
                                value="{{ $book->summary }}">
                            </textarea>
                        </div>
                        @error('summary')
                            <p id="error">{{$message}}</p>
                        @enderror

                        <x-button type="submit">
                            Submit
                        </x-button>
                    </form>
                </div>
    </x-form-card>
    <x-aside-nav />
</x-layout>
