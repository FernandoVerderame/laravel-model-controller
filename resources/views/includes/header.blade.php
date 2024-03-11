<header>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ url('/') }}">Movies</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link @if(Route::is('home')) active @endif" aria-current="page" href=" {{ url('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if(Route::is('about')) active @endif" aria-current="page" href=" {{ route('about') }}">About</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
</header>