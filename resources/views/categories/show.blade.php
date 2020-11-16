@extends('layouts.master')

@section('pageTitle', 'categories Details')

@section('content')
    <h1 class="display-6">categorie Details</h1>

    <hr/>

    <dl>
        <dt>Categorie Nom</dt>
        <dd>{{$categorie->categorie_nom}}</dd>
    </dl>

    <div class="d-flex">
        <a href="{{route('categories/modifier', $categorie)}}" class="btn btn-primary m-1">Edit</a>

        <form action="{{ route('categories/supprimer', $categorie->id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
            <button class="btn btn-danger m-1">Delete Categorie</button>
        </form>
    </div>
@endsection