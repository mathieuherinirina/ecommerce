<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produit;

class Categorie extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'categorie_id',
        'categorie_nom'
    ];

}
