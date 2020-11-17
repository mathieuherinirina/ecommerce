    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed">
      <a class="navbar-brand" href="{{ url('/') }}">Ecom</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <div class="dropdown-divider"></div>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/carts') }}">Mon panier</a>
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
        @if (Route::has('login'))
            <ul class="navbar-nav ml-auto">
                @auth
                  <li class="nav-item">
                    <p>Username</p>
                  </li>
                @else
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Se connecter</a>
                  </li>
                    @if (Route::has('register'))
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">S'inscrire</a>
                      </li>
                    @endif
                @endif
            </ul>
        @endif
        </div>
    </nav>