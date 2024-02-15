<x-layout>
    <div class="d-flex justify-content-center" >
        <div class="card text-bg-light mb-3" style="min-width: 50rem;">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/forms">Form Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="true" href="/admin/forms/create">Create a New Form</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="justify-content-center">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Form name</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (DB::table('forms')->get() as $form)
                                <tr>
                                    <th scope="row"></th>
                                    <td>{{ $form->name }}</td>
                                    <td>{{ $form->slug }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <button type="button" class="btn btn-light mx-2">
                                                <a href="/admin/forms/{{ $form->slug }}/edit">
                                                    Edit
                                                </a>
                                            </button>

                                            <form method=POST action="/admin/forms/{{ $form->id }}">
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
