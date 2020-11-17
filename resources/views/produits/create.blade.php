@extends('layouts.master')


@section('pageTitle', 'Create A produit')

@section('content')
  <div class="container">
    <h1>Créer un nouveau produit</h1>

    <div class="section-produit-create create-form">
      <button class="dropdown-toggle ddlCat" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="ddlCat">
        Choisir une catégorie
      </button>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">

        @foreach($categoriesList as $category)
          <button class="dropdown-item choose-category" data-id={{ $category->id }}>
            {{ $category->categorie_nom }}
          </button>
          <div class="dropdown-divider"></div>
        @endforeach

      </div>

      <form action="/produits/creer" method="POST">
        <div class="form-group">
          <label for="produit_categorie_id">
          </label>
          <input type="hidden" name="produit_categorie_id" class="form-control txtCategory">
        </div>

        <div class="form-group">
          <label for="produit_nom">
            Nom du produit
          </label>
          <input type="text" name="produit_nom" class="form-control">
        </div>

        <div class="form-group">
          <label for="produit_img_url">
            Url de l'image 
          </label>
          <input type="text" name="produit_img_url" class="form-control">
        </div>

        <div class="form-group">
          <label for="produit_prix">
            Prix 
          </label>
          <input type="number" name="produit_prix" class="form-control">
        </div>

        <div class="form-group">
          <label for="produit_description">
            Description
          </label>
          <input type="text" name="produit_description" class="form-control">
        </div>

        <!-- build the submission button -->
        <input type="submit" value="Créer" class="btn btn-success ml-auto">
      </form>

    </div>
  </div>
@endsection
