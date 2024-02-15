<x-layout>
   <x-form-card>
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/authors">Author Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="true" href="/admin/authors/create">Create a New Author</a>
                    </li>
                </ul>
            </div>
                <div class="card-body">
                    <form method="POST" action="/admin/authors">
                        @csrf
                        <label for="author-name">Author name</label>
                        <input name="name" class="form-control mb-2" type="text" aria-label="name" value="{{ old('name') }}">
                        @error('name')
                            <p id="error">{{$message}}</p>
                        @enderror

                        <label for="alias">Alias</label>
                        <input name="alias" class="form-control mb-2" type="text" aria-label="alias" value="{{ old('alias') }}">
                        @error('alias')
                            <p id="error">{{$message}}</p>
                        @enderror

                        <label for="slug">Slug</label>
                        <input name="slug" class="form-control mb-2" type="text" aria-label="slug" value="{{ old('slug') }}">
                        @error('slug')
                            <p id="error">{{$message}}</p>
                        @enderror

                        <label for="language">Language</label>
                        <select name="language_id" class="form-select mb-2" aria-label="Language">
                        @foreach (DB::table('languages')->get() as $language)
                        <option value="{{ $language->id }}">{{ ucwords($language->name) }}</option>
                            </a>
                        @endforeach
                        </select>

                        <label for="origin">Origin</label>
                        <select name="origin_id" class="form-select mb-2" aria-label="Origin">
                            @foreach (DB::table('origins')->get() as $origin)
                                <option value="{{ $origin->id }}">{{ ucwords($origin->name) }}</option>
                            @endforeach
                        </select>
                        @error('origin')
                            <p id="error">{{$message}}</p>
                        @enderror

                        <label for="period">Historical period</label>
                        <select name="period_id" class="form-select mb-2" aria-label="Period">
                            @foreach (DB::table('periods')->get() as $period)
                                <option value="{{ $period->id }}">{{ ucwords($period->name) }}</option>
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
