<x-layout>
    <x-form-card>
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="/admin/authors">Edit {{ $author->name }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/authors">Author Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="true" href="/admin/authors/create">Create a New Author</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <form method="POST" action="/admin/authors/{{ $author->id }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                    {{-- Author name --}}
                    <label for="author-name">Author name</label>
                    <input name="name" class="form-control mb-2" type="text" aria-label="author-name" value="{{ $author->name }}" required>
                    @error('author-name')
                        <p id="error">{{$message}}</p>
                    @enderror

                    {{-- Alias --}}
                    <label for="alias">Original title</label>
                    <input name="alias" class="form-control mb-2" type="text" aria-label="alias" value="{{ $author->alias }}" required>
                    @error('alias')
                        <p id="error">{{$message}}</p>
                    @enderror

                    {{-- Slug --}}
                    <label for="slug">Slug</label>
                    <input name="slug" class="form-control mb-2" type="text" aria-label="slug" value="{{ $author->slug }}" required>
                    @error('slug')
                        <p id="error">{{$message}}</p>
                    @enderror

                    {{-- LANGUAGE --}}
                    <label for="language_id">Language</label>
                    {{--should be searchable --}}
                    <select name="language_id" class="form-select mb-2" aria-label="Language">
                        @foreach (DB::table('languages')->get() as $language)
                            <option value="{{ $language->id }}">"{{ $author->language->name }}"</option>
                        @endforeach
                    </select>
                    @error('language')
                        <p id="error">{{$message}}</p>
                    @enderror

                    {{-- ORIGIN --}}
                    <label for="origin_id">Origin</label>
                    <select name="origin_id" class="form-select mb-2" aria-label="Origin">
                        @foreach (DB::table('origins')->get() as $origin)
                            <option value="{{ $origin->id }}">{{ $author->origin->name }}</option>
                        @endforeach
                    </select>
                    @error('origin')
                       <p id="error">{{$message}}</p>
                    @enderror

                    {{-- PERIOD --}}
                    <label for="period_id">Historical period</label>
                    <select name="period_id" class="form-select mb-2" aria-label="Period">
                        @foreach (DB::table('periods')->get() as $period)
                            <option value="{{ $period->id }}">{{ $author->period->name }}</option>
                        @endforeach
                    </select>
                    @error('period')
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
