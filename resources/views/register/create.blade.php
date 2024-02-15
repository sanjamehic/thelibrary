<x-layout>

  <div class="d-flex justify-content-center" >
      <div class="card text-bg-light mb-3" style="min-width: 50rem;">
          <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                  <a class="nav-link active" aria-current="true" href="#">Create Your Profile</a>
                  </li>
              </ul>
          </div>

          <!--Registration form -->

              <div class="card-body">
                  <form method="POST" action="/register">
                      @csrf

                      <label for="name">Full name</label>
                      <input class="form-control mb-2" type="text" aria-label="name" name="name" required value="{{ old('name') }}" >
                      @error('name')
                          <p id="error">{{$message}}</p>
                      @enderror

                      <label for="username">Username</label>
                      <input class="form-control mb-2" type="text" aria-label="username" name="username" required value="{{ old('username') }}">
                      @error('username')
                          <p id="error">{{$message}}</p>
                      @enderror

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
                          Submit
                      </x-button>

                  </form>

              </div>
      </div>
  </div>
</x-layout>
