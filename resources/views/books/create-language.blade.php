<x-layout>
    <x-form-card>
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/languages">Language Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="/admin/languages/create">Create a New Language</a>
                </li>
            </ul>
        </div>
                 <div class="card-body">
                     <form method="POST" action="/admin/languages">
                         @csrf

                        {{-- Language --}}
                         <label for="language">Language</label>
                         <input name="name" class="form-control mb-2" type="text" aria-label="name" value="{{ old('name') }}">
                         @error('name')
                             <p id="error">{{$message}}</p>
                         @enderror

                         {{-- Language slug --}}
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
