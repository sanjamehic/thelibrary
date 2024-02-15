<x-layout>
    <x-form-card>
             <div class="card-header">
                 <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/periods">Edit {{ $period->name }}</a>
                    </li>
                     <li class="nav-item">
                         <a class="nav-link" href="/admin/periods">Historical period Dashboard</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" aria-current="true" href="/admin/periods/create">Create a New Historical period</a>
                     </li>
                 </ul>
             </div>
                 <div class="card-body">
                     <form method="POST" action="/admin/periods/{{ $period->id }}" enctype="multipart/form-data">
                         @csrf
                         @method('PATCH')


                        {{-- Period name --}}
                         <label for="period-name">Period name</label>
                         <input name="name" class="form-control mb-2" type="text" aria-label="name" value="{{ $period->name }}" required>
                         @error('name')
                             <p id="error">{{$message}}</p>
                         @enderror

                         {{-- Period slug --}}
                         <label for="slug">Slug</label>
                         <input name="slug" class="form-control mb-2" type="text" aria-label="slug" value="{{ $period->slug }}" required>
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
