<x-layout>

<div class="justify-content-center">
    <h4>User Dashboard</h4>
<hr>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                <th scope="col">e-mail</th>
                <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>

            @foreach (DB::table('users')->get() as $user)
            <tr>
                <th scope="row"></th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <div class="d-flex">
                        <button type="button" class="btn btn-light mx-2">
                            <a href="/admin/users/{{ $user->id }}/edit">
                                Edit
                            </a>
                        </button>

                        <form method=POST action="/admin/users/{{ $user->id }}">
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
      </table>

    </div>
</x-layout>
