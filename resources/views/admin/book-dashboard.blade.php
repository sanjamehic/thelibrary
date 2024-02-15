<x-layout>
    <div class="d-flex justify-content-center" >
        <div class="card text-bg-light mb-3" style="min-width: 50rem;">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/books">Book dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="true" href="/admin/books/create">Create a New Book</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="justify-content-center">

                    <div class="row">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Cover</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (DB::table('books')->get() as $book)
                                <tr>
                                    <th scope="row"></th>
                                    <td><img src="{{ $book->cover ? asset('storage/' . $book->cover) : asset('/Images/Book/Image-Not-Available.jpg') }}" alt="" width="50px"></td>
                                    <td>{{ $book->title}}</td>
                                    <td value={{ $book->author_id }}>{{ $book->author->name ?? 'None' }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <button type="button" class="btn btn-light mx-2">
                                                <a href="/admin/books/{{ $book->slug }}/edit">
                                                    Edit
                                                </a>
                                            </button>
                                            <form method=POST action="/admin/books/{{ $book->id }}">
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
        </div>
        <x-aside-nav />
    </div>
</x-layout>
