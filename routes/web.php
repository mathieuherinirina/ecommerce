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

Route::get('/', 'HomeController@index')->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
  return route('home');
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
