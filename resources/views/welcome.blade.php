@extends('layouts.master')

@section('pageTitle', 'Home')

@section('content')

<div class="banner-home">
  <h1>Ecom</h1>
  <h1>Bienvenue dans notre plateforme de vente d'appareils électroniques</h1>
</div>

<div class="card-container">
    
    @foreach($produits as $produit)
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" alt="Card image cap" src={{$produit->produit_img_url}}>
        <div class="card-body">
            <h5 class="card-title">{{$produit->produit_nom}}</h5>
            <p>
             Categorie: {{$produit->categoryName}}
            </p>
            <p class="card-text">
              {{$produit->produit_description}}
            </p>
            <p>
             Prix: Ar {{$produit->produit_prix}}
            </p>
            <form action="/carts/creer" method="POST">
                <input type="hidden" name="cart_user_id" class="form-control" value={{ $currentUser->id }}>
                <input type="hidden" name="cart_produit_id" class="form-control" value={{ $produit->id }}>
                <input type="hidden" name="cart_status" class="form-control" value="0">
                <input type="submit" value="Ajouter au panier" class="btn btn-success m-1">
            </form>
            <a href="produits/{{$produit->id}}" class="btn btn-info m-1">Lire Details</a>
        </div>
    </div>
    @endforeach
    </div>
        

    
</div>

@endsection

