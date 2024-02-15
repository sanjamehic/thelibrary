<x-layout>
    <x-form-card>
             <div class="card-header">
                 <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/types">Edit {{ $type->name }}</a>
                    </li>
                     <li class="nav-item">
                         <a class="nav-link" href="/admin/types">Type Dashboard</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" aria-current="true" href="/admin/types/create">Create a New Type</a>
                     </li>
                 </ul>
             </div>
                 <div class="card-body">
                     <form method="POST" action="/admin/types/{{ $type->id }}" enctype="multipart/form-data">
                         @csrf
                         @method('PATCH')


                        {{-- Type name --}}
                         <label for="type-name">Type name</label>
                         <input name="name" class="form-control mb-2" type="text" aria-label="name" value="{{ $type->name }}" required>
                         @error('name')
                             <p id="error">{{$message}}</p>
                         @enderror

                         {{-- Type slug --}}
                         <label for="slug">Slug</label>
                         <input name="slug" class="form-control mb-2" type="text" aria-label="slug" value="{{ $type->slug }}" required>
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
