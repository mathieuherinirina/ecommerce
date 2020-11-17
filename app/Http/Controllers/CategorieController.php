<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Session;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        $currentUser = Session::get('currentUser');
        return view('categories.index', compact('categories','categories'))->with('currentUser', $currentUser)->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        $currentUser = Session::get('currentUser');
        return view('categories.create')->with('currentUser', $currentUser)->with('categories', $categories);
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
            'categorie_nom' => 'required',

        ]);

        $input = $request->all();

        Categorie::create($input);

        return redirect()->route('categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $Categorie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorie = Categorie::findOrFail($id);
        $currentUser = Session::get('currentUser');
        return view('categories.show', compact('categorie','categorie'))->with('currentUser', $currentUser)->with('categories', $categories);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $Categorie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Categorie::find($id);
        $currentUser = Session::get('currentUser');
        return view('categories.edit', compact('categorie','categorie'))->with('currentUser', $currentUser)->with('categories', $categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $Categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $categorie = Categorie::findOrFail($request["id"]);

        $this->validate($request, [
            'categorie_nom' => 'required',
            
        ]);

        $input = $request->all();

        $categorie->fill($input)->save();

        return redirect()->route('categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $Categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = Categorie::findOrFail($id);

        $categorie->delete();
        
        return redirect()->route('categories');
    }
}
