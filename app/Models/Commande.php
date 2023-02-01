<?php

namespace App\Models;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commande extends Model
{
    use HasFactory;

    public function produits(){

        return $this->belongsToMany(Produit::class)
        ->withPivot('quantite_total', 'prix_total');
    }

}
