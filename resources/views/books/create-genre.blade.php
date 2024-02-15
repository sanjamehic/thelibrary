<x-layout>
    <x-form-card>
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/genres">Genre Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="/admin/genres/create">Create a New Genre</a>
                </li>
            </ul>
        </div>
                 <div class="card-body">
                     <form method="POST" action="/admin/genres">
                         @csrf

                        {{-- Genre --}}
                         <label for="genre">Genre</label>
                         <input name="name" class="form-control mb-2" type="text" aria-label="name" value="{{ old('name') }}">
                         @error('name')
                             <p id="error">{{$message}}</p>
                         @enderror

                         {{-- Genre slug --}}
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
