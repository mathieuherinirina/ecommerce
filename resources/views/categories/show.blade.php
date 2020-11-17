@extends('layouts.master')

@section('pageTitle', 'categories Details')

@section('content')
    <div class="container">
        <h1>Fiche Catégorie</h1>

        <div class="fiche">
            <dl>
                <dt>Nom de la catégorie</dt>
                <dd>{{$categorie->categorie_nom}}</dd>
            </dl>

            <div class="btn-wrapper">
                <a href="{{route('categories/modifier', $categorie)}}" class="btn btn-primary m-1">Modifier</a>

                <form action="{{ route('categories/supprimer', $categorie->id) }}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
                    <button class="btn btn-danger m-1">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection