<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;


class Employe extends Authenticatable
{
    use HasFactory;
    use HasRoles;
    // Assignation de masse ie d'insertion.
    protected $fillable = ['nomEmploye', 'nomUtilisateur', 'motDePasse', 'status', 'id_personne'];

     // Clé primaire
    protected $primaryKey = 'numEmploye';

    
}
