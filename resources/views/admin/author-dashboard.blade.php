<x-layout>
    <div class="d-flex justify-content-center" >
        <div class="card text-bg-light mb-3" style="min-width: 50rem;">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/authors">Author Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="true" href="/admin/authors/create">Create a New Author</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="justify-content-center">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Author name</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Origin</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (DB::table('authors')->get() as $author)
                                <tr>
                                    <th scope="row"></th>
                                    <td>{{ $author->name }}</td>
                                    <td>{{ $author->slug }}</td>
                                    <td>{{ $author->origin_id }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <button type="button" class="btn btn-light mx-2">
                                                <a href="/admin/authors/{{ $author->slug }}/edit">
                                                    Edit
                                                </a>
                                            </button>

                                            <form method=POST action="/admin/authors/{{ $author->id }}">
                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <x-aside-nav />
    </div>
</x-layout>
