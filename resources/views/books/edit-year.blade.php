<x-layout>
    <x-form-card>
             <div class="card-header">
                 <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/years">Edit {{ $year->year }}</a>
                    </li>
                     <li class="nav-item">
                         <a class="nav-link" href="/admin/years">Year Dashboard</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" aria-current="true" href="/admin/years/create">Create a New Year</a>
                     </li>
                 </ul>
             </div>
                 <div class="card-body">
                     <form method="POST" action="/admin/years/{{ $year->id }}" enctype="multipart/form-data">
                         @csrf
                         @method('PATCH')


                        {{-- Year --}}
                         <label for="year">Year</label>
                         <input name="year" class="form-control mb-2" type="text" aria-label="year" value="{{ $year->year }}" required>
                         @error('year')
                             <p id="error">{{$message}}</p>
                         @enderror

                         {{-- Year slug --}}
                         <label for="slug">Slug</label>
                         <input name="slug" class="form-control mb-2" type="text" aria-label="slug" value="{{ $year->slug }}" required>
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
