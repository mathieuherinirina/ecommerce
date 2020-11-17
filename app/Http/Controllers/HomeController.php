<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;

use Session;

class HomeController extends Controller
{
  public function __construct() 
  {
    $this->middleware('auth');
  }

  public function index(Request $request)
  {
      $produits = Produit::all();
      $categories = Categorie::all();
      $currentUser = auth()->user()->count() > 0 ? auth()->user() : (object)[];
      Session::put('currentUser', $currentUser);
      $currentUser = Session::get('currentUser');
      return view('welcome')->with('produits', $produits)->with('currentUser', $currentUser)->with('categories', $categories);
  }
}
