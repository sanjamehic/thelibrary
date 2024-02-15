<x-layout>

    <div class="d-flex justify-content-center" >
        <div class="card text-bg-light mb-3" style="min-width: 40rem;">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                    Edit user
                    </li>
                </ul>
            </div>

            <!--Registration form -->

                <div class="card-body">
                    <form method="POST" action="/admin/users/{{ $user->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <label for="name">Full name</label>
                        <input class="form-control mb-2" type="text" aria-label="name" name="name"  value="{{ $user->name }}" required >
                        @error('name')
                            <p id="error">{{$message}}</p>
                        @enderror

                        <label for="username">Username</label>
                        <input class="form-control mb-2" type="text" aria-label="username" name="username" value="{{ $user->username }}" required>
                        @error('username')
                            <p id="error">{{$message}}</p>
                        @enderror

                        <label for="email">Email</label>
                        <input class="form-control mb-2" type="e-mail" aria-label="email" name="email" value="{{ $user->email }}" required>
                        @error('email')
                            <p id="error">{{$message}}</p>
                        @enderror


                        <x-button type="submit">
                            Update
                        </x-button>

                        <x-button>
                            <a href="/admin/users">Go back</a>
                        </x-button>



                    </form>

                </div>
        </div>
    </div>
  </x-layout>
