@extends('layouts.master')

@section('pageTitle', 'Carts Details')

@section('content')
    <h1 class="display-6">Cart Details</h1>

    <hr/>

    <dl>
        <dt>id_user</dt>
        <dd>{{$cart->cart_user_id}}</dd>

        <dt>id_prod</dt>
        <dd>{{$cart->cart_produit_id}}</dd>

        <dt>status</dt>
        <dd>{{$cart->cart_status}}</dd>

    </dl>

    <div class="d-flex">
        <a href="{{route('carts/modifier', $cart)}}" class="btn btn-primary m-1">Edit</a>

        <form action="{{ route('carts/supprimer/', $cart->id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger m-1">Delete User</button>
        </form>
    </div>
@endsection