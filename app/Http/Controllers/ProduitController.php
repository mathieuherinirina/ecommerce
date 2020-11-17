<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Session;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        $produits = Produit::all();
        // $categories = Categorie::all();
        foreach ($produits as $key => $value) {
            $categoryName = '';
            $categoryName = Categorie::find($value['produit_categorie_id'])->categorie_nom;
            $produits[$key]['categoryName'] = $categoryName;
        }
        
        $currentUser = Session::get('currentUser');
        return view('produits.index', compact('produits','produits'))->with('currentUser', $currentUser)->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $categories = Categorie::all();
      $currentUser = Session::get('currentUser');
      return view('produits.create', compact('categories', 'categories'))->with('currentUser', $currentUser);
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

        return redirect()->route('produits');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $Produit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Categorie::all();
        $produit = Produit::findOrFail($id);
        $currentUser = Session::get('currentUser');
        return view('produits.show', compact('produit','produit'))->with('currentUser', $currentUser)->with('categories', $categories);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit  $Produit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Categorie::all();
        $produit = Produit::find($id);
        $currentUser = Session::get('currentUser');
        return view('produits.edit', compact('produit','produit'))->with('currentUser', $currentUser)->with('categories', $categories);
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

        return redirect()->route('produits'); 
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
        
        return redirect()->route('produits');
    }
}
