<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    
    protected $fillable = ['nom', 'type', 'heure_globale'];

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

    // Relation Many-to-One : Un module appartient à un tarif_classe_type en fonction du type et de la classe
    public function tarif_Classe_Type()
    {
        return $this->belongsTo(Tarif_Classe_Type::class)->where('type', $this->type)->where('classe_id', $this->classe_id);
    }
    
}
