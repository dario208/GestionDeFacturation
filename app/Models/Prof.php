<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prof extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'telephone', 'heure_effectue', 'heure_total', 'solde_actuelle'];

    // Relation One-to-One : Un professeur est associé à un seul User
    public function user(){

        return $this->belongsTo(User::class);
    }


    // Relation One-to-Many : Un professeur peut enseigner plusieurs modules
    public function modules()
    {
        return $this->hasMany(Module::class);
    }

     // Relation One-to-Many : Un professeur peut avoir plusieurs factures
     public function factures()
     {
         return $this->hasMany(Facture::class);
     }
}
