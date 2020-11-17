<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::all();
        $currentUser = Session::get('currentUser');
        return view('carts.index', compact('carts','carts'))->with('currentUser', $currentUser);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $currentUser = Session::get('currentUser');
        return view('carts.create')->with('currentUser', $currentUser);
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
            'cart_user_id' => 'required',
            'cart_produit_id' => 'required',
            'cart_status' => 'required',
        ]);

        $input = $request->all();

        Cart::create($input);

        return redirect()->route('carts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $Cart
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cart = Cart::findOrFail($id);
        $currentUser = Session::get('currentUser');
        return view('carts.show', compact('cart','cart'))->with('currentUser', $currentUser);
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $Cart
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cart = Cart::find($id);
        $currentUser = Session::get('currentUser');
        return view('carts.edit', compact('cart','cart'))->with('currentUser', $currentUser);
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $Cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $cart = Cart::findOrFail($request["id"]);

        $this->validate($request, [
            'cart_user_id' => 'required',
            'cart_produit_id' => 'required',
            'cart_status' => 'required',
        ]);

        $input = $request->all();

        $cart->fill($input)->save();

        return redirect()->route('carts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $Cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);

        $cart->delete();
        
        return redirect()->route('carts');
    }
}
