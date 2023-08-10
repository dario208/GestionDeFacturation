<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Historique extends Model
{
    use HasFactory;

    public $timestamps = false;


    protected $fillable =['date','heure_de_debut','heure_de_fin','total_heure','module_id'];


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($historique) {
            // Convertir les heures de début et de fin en objets Carbon pour effectuer le calcul
            $heureDeDebut = Carbon::parse($historique->heure_de_debut);
            $heureDeFin = Carbon::parse($historique->heure_de_fin);

            // Calculer la différence entre les heures de fin et de début
            $differenceHeures = $heureDeFin->diffInHours($heureDeDebut);

            // Stocker le résultat dans la colonne total_heure
            $historique->total_heure = $differenceHeures;
        });
    }

    


    public function module(){

        return $this->belongsTo(Module::class);
    }

   
}
