<x-layout>
    <x-form-card>
             <div class="card-header">
                 <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/genres">Edit {{ $genre->name }}</a>
                    </li>
                     <li class="nav-item">
                         <a class="nav-link" href="/admin/genres">Genre Dashboard</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" aria-current="true" href="/admin/genres/create">Create a New Genre</a>
                     </li>
                 </ul>
             </div>
                 <div class="card-body">
                     <form method="POST" action="/admin/genres/{{ $genre->id }}" enctype="multipart/form-data">
                         @csrf
                         @method('PATCH')


                        {{-- Genre name --}}
                         <label for="genre-name">Genre name</label>
                         <input name="name" class="form-control mb-2" type="text" aria-label="name" value="{{ $genre->name }}" required>
                         @error('name')
                             <p id="error">{{$message}}</p>
                         @enderror

                         {{-- Genre slug --}}
                         <label for="slug">Slug</label>
                         <input name="slug" class="form-control mb-2" type="text" aria-label="slug" value="{{ $genre->slug }}" required>
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
