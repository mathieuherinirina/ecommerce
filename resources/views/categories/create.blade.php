@extends('layouts.master')


@section('pageTitle', 'Create A Categorie')

@section('content')
  <div class="container">
    <h1>Créer une catégorie</h1>

    <form action="/categories/creer" method="POST" class="create-form">
      <div class="form-group">
        <label for="categorie_nom">
          Nom de la catégorie
        </label>
        <input type="text" name="categorie_nom" class="form-control">
      </div>

      <!-- build the submission button -->
      <input type="submit" value="Créer" class="btn btn-success ml-auto">
    </form>
  </div>
@endsection
