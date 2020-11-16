<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::all();
        return view('produits.index', compact('produits','produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $categoriesList = Categorie::all();
      return view('produits.create', compact('categoriesList', 'categoriesList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'produit_nom' => 'required',
            'produit_categorie_id' => 'required',
            'produit_img_url' => 'required',
            'produit_prix' => 'required|numeric',
            'produit_description' => 'required',
        ]);

        $input = $request->all();

        Produit::create($input);

        return redirect()->route('produits.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $Produit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produit = Produit::findOrFail($id);
        return view('produits.show', compact('produit','produit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit  $Produit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit = Produit::find($id);
        
        return view('produits.edit', compact('produit','produit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit  $Produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $produit = Produit::findOrFail($request["id"]);

        $this->validate($request, [
            'produit_nom' => 'required',
            'produit_categorie_id' => 'required',
            'produit_img_url' => 'required',
            'produit_prix' => 'required|numeric',
            'produit_description' => 'required',
        ]);

        $input = $request->all();

        $produit->fill($input)->save();

        return redirect()->route('produits.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $Produit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit = Produit::findOrFail($id);

        $produit->delete();
        
        return redirect()->route('produits.index');
    }
}
