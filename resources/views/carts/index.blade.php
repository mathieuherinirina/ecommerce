@extends('layouts.master')

@section('pageTitle', 'Carts Index')

@section('content')
    <div class="container">
        <h1>Carts</h1>
        <a class="btn btn-success btn-creer" href="{{route('carts/creer')}}">Ajouter à la carte</a>
        <hr/>

        <table class="table">
            <thead>
            <th>Utilisateur</th>
            <th>Produit</th>
            <th>Statut Paiement</th>
            <th colspan="3">Actions</th>
            </thead>

            @foreach($carts as $cart)
                <tr>
                    <td>{{$cart->username}}</td>
                    <td>{{$cart->productname}}</td>
                    <td>{{$cart->paiement}}</td>
                    <td>
                        <div class="d-flex">
                            <a href="carts/{{$cart->id}}" class="btn btn-info m-1">Détails</a>
                            <a href="{{route('carts/modifier', $cart->id)}}" class="btn btn-warning m-1">Modifier</a>
                            @method('DELETE')
                            <form action="{{ route('carts/supprimer', $cart->id) }}" method="POST">
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