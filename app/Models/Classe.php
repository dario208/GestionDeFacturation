<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $fillable = ['niveau'];

    // Relation One-to-Many : Une classe peut recevoir plusieurs modules
    public function modules()
    {
        return $this->hasMany(Module::class);
    }
}
