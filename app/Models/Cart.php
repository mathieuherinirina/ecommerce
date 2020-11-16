<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'cart_id',
        'cart_user_id' ,
        'cart_produit_id',
        'cart_status'
    ];
}
