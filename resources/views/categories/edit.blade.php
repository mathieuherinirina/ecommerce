@extends('layouts.master')

@section('pageTitle', 'Edit Categorie Details')

@section('content')

    <h1 class="display-6">Modifier Categorie</h1>

    <hr/>

    <form action="{{ route('categories/modifier', $categorie->id) }}" method="POST" >
      <input type="hidden" name="_method" value="PUT">
      <input type="hidden" name="id" value="{{ $categorie->id}}">
      <div class="form-group">
        <label for="categorie_nom">
          Nom Categorie
        </label>
        <input type="text" name="categorie_nom" class="form-control" value="{{$categorie->categorie_nom}}">
      </div>

      @method('PUT')
      <input type="submit" value="Modifier">
    </form>
      
@endsection