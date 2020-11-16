    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="{{ url('/') }}">Ecom</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Nos Produits</a>
          </li>
          <div class="dropdown-divider"></div>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/carts') }}">Mon pannier</a>
          </li>
          <div class="dropdown-divider"></div>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/produits') }}">Gérer les Produits</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/categories') }}">Gérer les Catégories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/users') }}">Gérer les Utilisateurs</a>
          </li>
        </ul>
      </div>

      @if (Route::has('login'))
          <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
              @auth
                  <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
              @else
                  <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                  @endif
              @endif
          </div>
      @endif
    </nav>