<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    //use softDeletes;

    // Assignation de masse ie d'insertion.
    protected $fillable = ['libelle', 'quantiteStock', 'prixUnitaire', 'caracteristique'];

    // Clé primaire
    protected $primaryKey = 'numProduit';

    protected function exist(String $name){
        $p = Produit::all()->where('libelle', $name);
        if (count($p)==0){
            return false;
        } return true;
    }
}