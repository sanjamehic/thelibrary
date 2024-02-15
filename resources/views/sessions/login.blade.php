
<x-layout>

    <div class="d-flex justify-content-center" >
        <div class="card text-bg-light mb-3" style="min-width: 40rem;">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="#">Log in to Your Profile</a>
                    </li>
                </ul>
            </div>

            <!--Registration form -->

                <div class="card-body">
                    <form method="POST" action="/login">
                        @csrf

                        <label for="email">Email</label>
                        <input class="form-control mb-2" type="e-mail" aria-label="email" name="email" required value="{{ old('email') }}">
                        @error('email')
                            <p id="error">{{$message}}</p>
                        @enderror

                        <label for="password">Password</label>
                        <input class="form-control mb-2" type="password" aria-label="password" name="password" type="password" autocomplete="new-password" required>
                        @error('password')
                            <p id="error">{{$message}}</p>
                        @enderror

                        <x-button type="submit">
                            Log in
                        </x-button>

                    </form>

                </div>
        </div>
    </div>
  </x-layout>
