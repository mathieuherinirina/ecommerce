@extends('layouts.master')

@section('pageTitle', 'Produits Details')

@section('content')
    <h1 class="display-6">Produit Details</h1>

    <hr/>

    <dl>
        <dt>Nom_produit</dt>
        <dd>{{$produit->produit_nom}}</dd>

        <dt>categorie_id</dt>
        <dd>{{$produit->produit_categorie_id}}</dd>

        <!-- <img src="{{$produit->produit_img_url}}"> -->

        <dt>Prix</dt>
        <dd>{{$produit->produit_prix}}</dd>

        <dt>Description</dt>
        <dd>{{$produit->produit_description}}</dd>
    </dl>

    <div class="d-flex">
        <a href="{{route('produits/modifier', $produit->id)}}" class="btn btn-primary m-1">Edit</a>

        @method('DELETE')
        <form action="{{ route('produits/supprimer', $produit->id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
            <button class="btn btn-danger m-1">Delete Product</button>
        </form>
    </div>
@endsection