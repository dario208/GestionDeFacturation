<?php

namespace App\Models;

use App\Models\Tarif;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classe extends Model
{
    use HasFactory;

    protected $fillable = ['niveau'];

    // Relation One-to-Many : Une classe peut recevoir plusieurs modules
    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function tarifs()
    {
        return $this->hasMany(Tarif::class);
    }

}
