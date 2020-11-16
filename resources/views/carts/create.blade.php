@extends('layouts.master')


@section('pageTitle', 'Create A Cart')

@section('content')
    <h1 class="display-6">Create New Cart</h1>

    <hr/>

  <form action="/creer" method="POST" >
    <div class="form-group">
      <label for="cart_user_id">
        User ID
      </label>
      <input type="number" name="cart_user_id" class="form-control">
    </div>

    <div class="form-group">
      <label for="cart_produit_id">
        Produit ID
      </label>
      <input type="number" name="cart_produit_id" class="form-control">
    </div>

    <div class="form-group">
      <label for="cart_status">
        Status (0 pour impayé ,  1 pour déjà payé)
      </label>
      <input type="number" name="cart_status" class="form-control">
    </div>

    <!-- build the submission button -->
    <input type="submit" value="Créer Panier">
  </form>
@endsection
