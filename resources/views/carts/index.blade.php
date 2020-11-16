@extends('layouts.master')

@section('pageTitle', 'Carts Index')

@section('content')
    <h1 class="display-6">Carts</h1>
    <a href="{{route('carts/creer')}}">Create New</a>
    <hr/>


    <table class="table">
        <thead>
        <th>User ID</th>
        <th>Produit ID</th>
        <th>Status paiement</th>
        <th colspan="3">Actions</th>
        </thead>

        @foreach($carts as $cart)
            <tr>
                <td>{{$cart->cart_user_id}}</td>
                <td>{{$cart->cart_produit_id}}</td>
                <td>{{$cart->cart_status}}</td>
                <td>
                    <div class="d-flex">
                        <a href="{{route('carts', $cart->id)}}" class="btn btn-info m-1">Details</a>
                        <a href="{{route('carts/modifier', $cart->id)}}" class="btn btn-primary m-1">Edit</a>
                        @method('DELETE')
                        <form action="{{ route('carts/supprimer', $cart->id) }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
                            <button class="btn btn-danger m-1">Delete Cart</button>
                        </form>
                    </div>

                </td>
            </tr>
        @endforeach
    </table>

@endsection