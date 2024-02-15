<x-layout>
    <x-form-card>
             <div class="card-header">
                 <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/publishers">Edit {{ $publisher->name }}</a>
                    </li>
                     <li class="nav-item">
                         <a class="nav-link" href="/admin/publishers">Publisher Dashboard</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" aria-current="true" href="/admin/publishers/create">Create a New Publisher</a>
                     </li>
                 </ul>
             </div>
                 <div class="card-body">
                     <form method="POST" action="/admin/publishers/{{ $publisher->id }}" enctype="multipart/form-data">
                         @csrf
                         @method('PATCH')

                         <label for="publisher-name">Publisher name</label>
                         <input name="name" class="form-control mb-2" type="text" aria-label="name" value="{{ $publisher->name }}" required>
                         @error('name')
                             <p id="error">{{$message}}</p>
                         @enderror

                         {{-- Publisher place --}}
                         <label for="place">Place</label>
                         <input name="place" class="form-control mb-2" type="text" aria-label="alias" value="{{ $publisher->place }}" required>
                         @error('place')
                             <p id="error">{{$message}}</p>
                         @enderror

                         {{-- Publisher slug --}}
                         <label for="slug">Slug</label>
                         <input name="slug" class="form-control mb-2" type="text" aria-label="slug" value="{{ $publisher->slug }}" required>
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
