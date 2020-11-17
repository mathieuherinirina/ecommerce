@extends('layouts.master')

@section('pageTitle', 'Edit Categorie Details')

@section('content')
  <div class="container">
    <h1>Modifier la Catégorie</h1>

    <form action="{{ route('categories/modifier', $categorie->id) }}" method="POST" class="edit-form">
      <input type="hidden" name="_method" value="PUT">
      <input type="hidden" name="id" value="{{ $categorie->id}}">
      <div class="form-group">
        <label for="categorie_nom">
          Nom de la Catégorie
        </label>
        <input type="text" name="categorie_nom" class="form-control" value="{{$categorie->categorie_nom}}">
      </div>

      @method('PUT')
      <input type="submit" value="Modifier" class="btn btn-success ml-auto">
    </form>
  </div>    
@endsection