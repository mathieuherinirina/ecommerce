@extends('layouts.master')

@section('pageTitle', 'Carts Details')

@section('content')
    <div class="container">
        <h1 class="display-6">Fiche Carte</h1>
        
        <div class="fiche">
            <dl>
                <dt>Utilisateur</dt>
                <dd>{{$cart->cart_user_id}}</dd>

                <dt>Produit</dt>
                <dd>{{$cart->cart_produit_id}}</dd>

                <dt>Statut</dt>
                <dd>{{$cart->cart_status}}</dd>

            </dl>

            <div class="btn-wrapper">
                <a href="{{route('carts/modifier', $cart)}}" class="btn btn-primary m-1">Modifier</a>

                <form action="{{ route('carts/supprimer/', $cart->id) }}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button class="btn btn-danger m-1">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
@endsection