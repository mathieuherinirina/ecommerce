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
          <li class="nav-item">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownCategorie" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
              Categories
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownCategorie">
              @foreach($categories as $categorie)
                <a class="dropdown-item dropdown-categorie" href="#">{{$categorie->categorie_nom}}</a>
              @endforeach  
            </div>
          </li>
          <div class="dropdown-divider"></div>
          @if($currentUser->count() > 0 && $currentUser->role === 'admin')
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/produits') }}">Gérer les Produits</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/categories') }}">Gérer les Catégories</a>
            </li>
          @endif
        </ul>
        @if (Route::has('login'))
            <ul class="navbar-nav ml-auto">
                @auth
                  @if($currentUser->count() > 0)
                    <p class="text-white">{{ $currentUser->name }}</p>
                    <li class="nav-item">
                      <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" class="logout-form">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                {{ __('Logout') }}
                            </x-jet-dropdown-link>
                        </form>
                    </li>
                  @endif
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