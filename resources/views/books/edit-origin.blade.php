<x-layout>
    <x-form-card>
             <div class="card-header">
                 <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/origins">Edit {{ $origin->name }}</a>
                    </li>
                     <li class="nav-item">
                         <a class="nav-link" href="/admin/origins">Origin Dashboard</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" aria-current="true" href="/admin/origins/create">Create a New Origin</a>
                     </li>
                 </ul>
             </div>
                 <div class="card-body">
                     <form method="POST" action="/admin/origins/{{ $origin->id }}" enctype="multipart/form-data">
                         @csrf
                         @method('PATCH')


                        {{-- Origin name --}}
                         <label for="origin-name">Origin name</label>
                         <input name="name" class="form-control mb-2" type="text" aria-label="name" value="{{ $origin->name }}" required>
                         @error('name')
                             <p id="error">{{$message}}</p>
                         @enderror

                         {{-- Origin slug --}}
                         <label for="slug">Slug</label>
                         <input name="slug" class="form-control mb-2" type="text" aria-label="slug" value="{{ $origin->slug }}" required>
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
