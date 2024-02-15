<x-layout>
    <x-form-card>
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/formats">Format Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="/admin/formats/create">Create a New Format</a>
                </li>
            </ul>
        </div>
                 <div class="card-body">
                     <form method="POST" action="/admin/formats">
                         @csrf

                        {{-- Format name --}}
                         <label for="format-name">Format name</label>
                         <input name="name" class="form-control mb-2" type="text" aria-label="name" value="{{ old('name') }}">
                         @error('name')
                             <p id="error">{{$message}}</p>
                         @enderror

                         {{-- Format slug --}}
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
