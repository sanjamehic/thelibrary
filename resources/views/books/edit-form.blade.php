<x-layout>
    <x-form-card>
             <div class="card-header">
                 <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/forms">Edit {{ $form->name }}</a>
                    </li>
                     <li class="nav-item">
                         <a class="nav-link" href="/admin/forms">Form Dashboard</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" aria-current="true" href="/admin/forms/create">Create a New Form</a>
                     </li>
                 </ul>
             </div>
                 <div class="card-body">
                     <form method="POST" action="/admin/forms/{{ $form->id }}" enctype="multipart/form-data">
                         @csrf
                         @method('PATCH')


                        {{-- Form name --}}
                         <label for="form-name">Form name</label>
                         <input name="name" class="form-control mb-2" type="text" aria-label="name" value="{{ $form->name }}" required>
                         @error('name')
                             <p id="error">{{$message}}</p>
                         @enderror

                         {{-- Form slug --}}
                         <label for="slug">Slug</label>
                         <input name="slug" class="form-control mb-2" type="text" aria-label="slug" value="{{ $form->slug }}" required>
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
