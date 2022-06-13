<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'sexe', 'email', 'dateNaiss', 'adresse', 'numero'];

    // Clé primaire
    protected $primaryKey = 'id';

    // casté le json en array.
    protected $casts = ['adresse'=>'array'];

    public function client(){
            return $this->hasOne(Client::class);
    }
}
