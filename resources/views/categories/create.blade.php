@extends('layouts.master')


@section('pageTitle', 'Create A Categorie')

@section('content')
  <h1 class="display-6">Create New Categorie</h1>

  <hr/>

  <form action="/categories/creer" method="POST" >
    <div class="form-group">
      <label for="categorie_nom">
        Categorie Nom
      </label>
      <input type="text" name="categorie_nom" class="form-control">
    </div>

    <!-- build the submission button -->
    <input type="submit" value="Créer">
  </form>
@endsection
