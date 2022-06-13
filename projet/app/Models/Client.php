<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{   
    protected $fillable = ['typeClient', 'status', 'id_personne'];
    // Clé primaire
    protected $primaryKey = 'numClient';

    use HasFactory;

    public function personne(){
        return $this->belongsTo(Personne::class);
    }
}
