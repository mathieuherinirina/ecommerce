<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
      $produits = Produit::all();
      // return $produits;
      return view('welcome')->with('produits', $produits);
  }
}
