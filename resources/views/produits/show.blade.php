@extends('layouts.master')

@section('pageTitle', 'Produits Details')

@section('content')
    <div class="container">
        <h1 class="display-6">Fiche Produit</h1>

        <div class="fiche">
            <dl>
                <dt>Nom du produit</dt>
                <dd>{{$produit->produit_nom}}</dd>

                <dt>Catégorie</dt>
                <dd>{{$produit->produit_categorie_id}}</dd>

                <!-- <img src="{{$produit->produit_img_url}}"> -->

                <dt>Prix</dt>
                <dd>{{$produit->produit_prix}}</dd>

                <dt>Description</dt>
                <dd>{{$produit->produit_description}}</dd>
            </dl>

            <div class="btn-wrapper">
                <a href="{{route('produits/modifier', $produit->id)}}" class="btn btn-primary m-1">Modifier</a>

                @method('DELETE')
                <form action="{{ route('produits/supprimer', $produit->id) }}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
                    <button class="btn btn-danger m-1">Supprimer</button>
                </form>
            </div>
        </div>
        
    </div>

    
@endsection