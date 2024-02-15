<x-layout>
    <x-form-card>
             <div class="card-header">
                 <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/languages">Edit {{ $language->name }}</a>
                    </li>
                     <li class="nav-item">
                         <a class="nav-link" href="/admin/languages">Language Dashboard</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" aria-current="true" href="/admin/languages/create">Create a New Language</a>
                     </li>
                 </ul>
             </div>
                 <div class="card-body">
                     <form method="POST" action="/admin/languages/{{ $language->id }}" enctype="multipart/form-data">
                         @csrf
                         @method('PATCH')


                        {{-- Language name --}}
                         <label for="language-name">Language name</label>
                         <input name="name" class="form-control mb-2" type="text" aria-label="name" value="{{ $language->name }}" required>
                         @error('name')
                             <p id="error">{{$message}}</p>
                         @enderror

                         {{-- Language slug --}}
                         <label for="slug">Slug</label>
                         <input name="slug" class="form-control mb-2" type="text" aria-label="slug" value="{{ $language->slug }}" required>
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
