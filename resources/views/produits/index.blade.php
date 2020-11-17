@extends('layouts.master')

@section('pageTitle', 'Produits Index')

@section('content')

    <div class="container">
        <h1>Produits</h1>
        <a class="btn btn-success btn-creer" href="{{route('produits/creer')}}">Créer un nouveau produit</a>
        <hr/>


        <table class="table">
            <thead>
            <th>Nom du produit</th>
            <th>Categorie</th>
            <th>Image</th>
            <th>Prix</th>
            <th>Description</th>
            <th colspan="3">Actions</th>
            </thead>

            @foreach($produits as $produit)
                <tr>
                    <td>{{$produit->produit_nom}}</td>
                    <td>{{$produit->categoryName}}</td>
                    <td>{{$produit->produit_img_url}}</td>
                    <td>{{$produit->produit_prix}}</td>
                    <td>{{$produit->produit_description}}</td>
                    <td>
                        <div class="d-flex">
                            <a href="produits/{{$produit->id}}" class="btn btn-info m-1">Détails</a>
                            <a href="{{route('produits/modifier', $produit->id)}}" class="btn btn-warning m-1">Modifier</a>

                            @method('DELETE')
                            <form action="{{ route('produits/supprimer', $produit->id) }}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
                                <button class="btn btn-danger m-1">Supprimer</button>
                            </form>
                        </div>

                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    

@endsection