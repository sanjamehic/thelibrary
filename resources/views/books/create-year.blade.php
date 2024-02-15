<x-layout>
    <x-form-card>
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/years">Year Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="/admin/years/create">Create a New Year</a>
                </li>
            </ul>
        </div>
                 <div class="card-body">
                     <form method="POST" action="/admin/years">
                         @csrf

                        {{-- Year --}}
                         <label for="year">Year</label>
                         <input name="year" class="form-control mb-2" type="text" aria-label="year" value="{{ old('year') }}">
                         @error('year')
                             <p id="error">{{$message}}</p>
                         @enderror

                         {{-- Year slug --}}
                         <label for="slug">Slug</label>
                         <input name="slug" class="form-control mb-2" type="text" aria-label="slug" value="{{ old('slug') }}">
                         @error('slug')
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
