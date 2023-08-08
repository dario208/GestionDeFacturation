<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = ['nom','heure_globale','prof_id','classe_id','tarif_id'];

    // Relation Many-to-One : Un module est attribué à un seul professeur
    public function prof()
    {
        return $this->belongsTo(Prof::class);
    }

    // Relation Many-to-One : Un module est associé à une seule classe
    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }

    // Relation Many-to-One : Un module appartient à un  en fonction du type et de la classe
    public function tarif()
    {
        return $this->belongsTo(Tarif::class);
    }

    public function historiques(){
        
        return $this->hasMany(Historique::class);
    }
    
}
