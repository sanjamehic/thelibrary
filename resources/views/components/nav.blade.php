
        <!--Navbar-->

        <nav class="navbar navbar-expand-lg navbar-light navigation">
          <a class="navbar-brand mr-auto p-2" href="/">
            <img src="\Images\Logo-TPL-long.gif" alt="The Public Library" height="80">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto main-nav">
              <li class="nav-item p-2">
                <a class="nav-link" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link" href="#">Ask Librarian</a>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link" href="#newsletter">Subscribe</a>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link" href="#">Blog</a>
              </li>

            </ul>

            <ul class="navbar-nav">

                @auth
                <li class="nav-item p-3">

                    <div class="btn-group">
                        <button class="btn btn-light btn-sm" type="button">
                            <a class="nav-link active" href="/admin/dashboard">Wellcome,  <strong>{{ auth()->user()->username }}</strong>!</a>
                        </button>
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                          <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu px-5">
                            @if (auth()->user()->is_admin == 1)
                            <li><a class="dropdown-item" href="/admin/dashboard">Dashboard</a></li>
                            @endif

                            <li><a class="dropdown-item" href="#">Bookshelf</a></li>
                            <li><a class="dropdown-item" href="#">Account</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><form method="POST" action="/logout">
                                    @csrf
                                    <a class="dropdown-item" href="/logout"  type="submit">Log Out</a>
                                </form>
                            </li>
                        </ul>
                      </div>

                </li>

                @else
                    <li class="nav-item">
                        <a class="nav-link active" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/register">Register</a>
                    </li>



                @endauth

            </ul>
          </div>
        </div>
      </nav>
    </div>

