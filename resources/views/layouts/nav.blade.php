  <div class="container-fluid">
    <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      @auth
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Accounts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ministry</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Requests</a>
        </li>
      </ul>
      @endauth
      @guest
      <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
      @endguest
      <span class="navbar-text">
        @auth
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="material-icons">face</span> {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item text-secondary" href="#">Config</a></li>
              <li><a class="dropdown-item text-secondary" href="{{ route('logout') }}">Logout</a></li>
            </ul>
          </li>
        </ul>
        @endauth
        @guest
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('login') }}">Login</a>
          </li><li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Signup</a>
          </li>
        </ul>
        @endguest
      </span>
    </div>
  </div>