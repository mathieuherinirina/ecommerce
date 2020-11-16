<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'produit_id',
        'produit_nom',
        'produit_categorie_id' ,
        'produit_img_url',
        'produit_prix',
        'produit_description'        
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Categorie');
    }
}
