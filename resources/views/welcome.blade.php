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
             Categorie: {{$produit->produit_categorie_id}}
            </p>
            <p class="card-text">
              {{$produit->produit_description}}
            </p>
            <p>
             Prix: Ar {{$produit->produit_prix}}
            </p>
            <a href="#" class="btn btn-primary">Ajouter à cart </a>
            <a href="produits/{{$produit->id}}" class="btn btn-info m-1">Lire Details</a>
        </div>
    </div>
    @endforeach
    </div>
        

    
</div>

@endsection

