@extends('layouts.master')


@section('pageTitle', 'Create A Cart')

@section('content')
  <div class="container">
    <h1>Ajouter un élément à la carte</h1>

    <form action="/carts/creer" method="POST"  class="create-form">
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
          Statut (0 pour impayé ,  1 pour déjà payé)
        </label>
        <input type="number" name="cart_status" class="form-control">
      </div>

      <!-- build the submission button -->
      <input type="submit" value="Ajouter au panier" class="btn btn-success ml-auto">
    </form>
  </div>
  
@endsection
