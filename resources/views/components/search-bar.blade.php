
<!--Search bar-->
<div class="">
    <div class="card bg-light p-3 flex-item-right">
        <div class="card-body">
            <h5 class="card-title">Search our library</h5>

            <form method="GET" action="/">
             @csrf

                <input  type="text"
                        name="search"
                        class="form-control me-2"
                        placeholder="Search by author, title, key words"
                        value="{{ request('search') }}"
                        >
                    <!--Buttons-->

                    <div class="d-flex mt-3 justify-content-end">
                        <x-button type="submit">
                            Search
                        </x-button>
            </form>
                        {{-- <x-button>
                            <a href="#">Advanced</a>
                        </x-button> --}}

                        <x-button>
                            <a href="/">Clear</a>
                        </x-button>
                        <x-button>
                            <a href="#new-books">Browse</a>
                        </x-button>
                    </div>

                    <!---Basic Filters-->

                    <h6 class="mt-4 me-2">Refine your results</h6>

                    <div class="btn-group mb-3">

                        @foreach (DB::table('types')->get() as $type)
                        <a href="/types/{{ $type->id }}" class="btn btn-secondary" aria-current="page" name="type"
                            :active='request()->is("type/{{$type->slug}}")'
                            >{{ ucwords($type->name) }}
                            </a>
                        @endforeach
                    </div>

                    <div class="btn-group flex-wrap mb-3">

                        @foreach (DB::table('formats')->get() as $format)
                            <a href="/formats/{{ $format->slug }}" class="btn btn-secondary" aria-current="page"
                            :active='request()->is("format/{$format->slug}")'
                            >{{ ucwords($format->name) }}
                            </a>
                        @endforeach
                    </div>
        </div>

    </div>
</div>

