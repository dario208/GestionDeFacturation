<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historique extends Model
{
    use HasFactory;

    protected $fillable =['date','heure_de_debut','heure_de_fin','total_heure','module_id'];

    public function module(){

        return $this->belongsTo(Module::class);
    }
}
