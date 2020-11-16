@extends('layouts.master')

@section('pageTitle', 'Edit Produits Details')

@section('content')

    <h1 class="display-6">Edit Produits</h1>

    <hr/>

    <form action="/ecom/public/produits/{{$produit->id}}" method="POST" >
      <input type="hidden" name="_method" value="PUT">
      <input type="hidden" name="id" value="{{ $produit->id}}">
      <div class="form-group">
        <label for="produit_nom">
          Nom
        </label>
        <input type="text" name="produit_nom" class="form-control" value="{{$produit->produit_nom}}">
      </div>

      <div class="form-group">
        <label for="produit_categorie_id">
          Categorie id
        </label>
        <input type="text" name="produit_categorie_id" class="form-control" value="{{$produit->produit_categorie_id}}">
      </div>

      <div class="form-group">
        <label for="produit_img_url">
          Image_url
        </label>
        <input type="text" name="produit_img_url" class="form-control" value="{{$produit->produit_img_url}}">
      </div>

      <div class="form-group">
        <label for="produit_prix">
          Prix
        </label>
        <input type="number" name="produit_prix" class="form-control" value="{{$produit->produit_prix}}">
      </div>

      <div class="form-group">
        <label for="produit_description">
            Description
        </label>
        <input type="text" name="produit_description" class="form-control" value="{{$produit->produit_description}}">
      </div>

      @method('PUT')
      <input type="submit" value="Modifier">
    </form>
      
@endsection