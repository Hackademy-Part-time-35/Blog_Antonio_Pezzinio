<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('welcome') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('articles') }}">Articoli</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('aboutUs') }}">Chi Siamo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contacts') }}">Contatto</a>
          </li>

</ul>

        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

          @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->email }}
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="{{ route('account') }}">Account</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ route('articles.index') }}">Gestione Articoli</a></li>
                <li><a class="dropdown-item" href="{{ route('categories.index') }}">Gestione Categorie</a></li>

                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button class="dropdown-item" type="submit">Esci</button>
                  </form>
                </li>
              </ul>
            </li>
          @else

            <li class="nav-item">
              <a class="nav-link" href="/register">Registrati</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/login">Accedi</a>
            </li>
          @endauth






        </ul>
      </div>
    </div>
  </nav>
