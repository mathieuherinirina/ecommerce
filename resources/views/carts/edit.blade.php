@extends('layouts.master')

@section('pageTitle', 'Edit Cart Details')

@section('content')

    <h1 class="display-6">Edit Cart</h1>

    <hr/>

    <form action="/modifier/{{$cart->id}}" method="POST" >
      <input type="hidden" name="_method" value="PUT">
      <input type="hidden" name="id" value="{{ $cart->id}}">
      <div class="form-group">
        <label for="cart_user_id">
          User ID
        </label>
        <input type="text" name="cart_user_id" class="form-control" value="{{$cart->cart_user_id}}">
      </div>

      <div class="form-group">
        <label for="cart_produit_id">
          Produit ID
        </label>
        <input type="text" name="cart_produit_id" class="form-control" value="{{$cart->cart_produit_id}}">
      </div>

      <div class="form-group">
        <label for="cart_status">
          Status
        </label>
        <input type="text" name="cart_status" class="form-control" value="{{$cart->cart_status}}">
      </div>

      @method('PUT')
      <input type="submit" value="Modifier">
    </form>
      
@endsection