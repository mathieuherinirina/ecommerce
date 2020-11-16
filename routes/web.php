<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// route produits

Route::get('produits','ProduitController@index')->name('produits');

Route::get('produits/creer/','ProduitController@create')->name('produits/creer');
Route::post('produits/creer/','ProduitController@store')->name('produits/creer');

Route::get('produits/{id}','ProduitController@show')->name('produits/{id}');

Route::get('produits/modifier/{id}','ProduitController@edit')->name('produits/modifier');
Route::put('produits/modifier/{id}','ProduitController@update')->name('produits/modifier');

Route::delete('produits/supprimer/{id}','ProduitController@destroy')->name('produits/supprimer');

// categories
Route::get('categories','CategorieController@index')->name('categories');

Route::get('categories/creer','CategorieController@create')->name('categories/creer');
Route::post('categories/creer','CategorieController@store')->name('categories/creer');

Route::get('categories/{id}','CategorieController@show')->name('categories/{id}');

Route::get('categories/modifier/{id}','CategorieController@edit')->name('categories/modifier');
Route::put('categories/modifier/{id}','CategorieController@update')->name('categories/modifier');

Route::delete('categories/supprimer/{id}','CategorieController@destroy')->name('categories/supprimer');

// cart
Route::get('carts','CartController@index')->name('carts');

Route::get('carts/creer/','CartController@create')->name('carts/creer');
Route::post('carts/creer/','CartController@store')->name('carts/creer');

Route::get('carts/{id}','CartController@show')->name('carts/{id}');

Route::get('carts/modifier/{id}','CartController@edit')->name('carts/modifier');
Route::put('carts/modifier/{id}','CartController@update')->name('carts/modifier');

Route::delete('carts/supprimer/{id}','CartController@destroy')->name('carts/supprimer');

// Route::resource('produits', ProduitController::class)->names(['produits' => 'produits.index']);
// Route::resource('produits', ProduitController::class)->names(['produits' => 'produits.store']);
// Route::resource('produits', ProduitController::class)->names(['produits' => 'produits.create']);
// Route::resource('produits', ProduitController::class)->names(['produits' => 'produits.show']);
// Route::resource('produits', ProduitController::class)->names(['produits' => 'produits.update']);
// Route::resource('produits', ProduitController::class)->names(['produits' => 'produits.destroy']);
// Route::resource('produits', ProduitController::class)->names(['produits' => 'produits.edit']);

// //route categories

// Route::resource('categories', CategorieController::class)->names(['categories' => 'categories.index']);
// Route::resource('categories', CategorieController::class)->names(['categories' => 'categories.store']);
// Route::resource('categories', CategorieController::class)->names(['categories' => 'categories.create']);
// Route::resource('categories', CategorieController::class)->names(['categories' => 'categories.show']);
// Route::resource('categories', CategorieController::class)->names(['categories' => 'categories.update']);
// Route::resource('categories', CategorieController::class)->names(['categories' => 'categories.destroy']);
// Route::resource('categories', CategorieController::class)->names(['categories' => 'categories.edit']);

// //route carts

// Route::resource('carts', CartController::class)->names(['carts' => 'carts.index']);
// Route::resource('carts', CartController::class)->names(['carts' => 'carts.store']);
// Route::resource('carts', CartController::class)->names(['carts' => 'carts.create']);
// Route::resource('carts', CartController::class)->names(['carts' => 'carts.show']);
// Route::resource('carts', CartController::class)->names(['carts' => 'carts.update']);
// Route::resource('carts', CartController::class)->names(['carts' => 'carts.destroy']);
// Route::resource('carts', CartController::class)->names(['carts' => 'carts.edit']);