<?php

namespace App\Models;
use App\Models\Classe;
use App\Models\Module;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tarif extends Model
{
    use HasFactory;

    protected $fillable=['type','cout_horaire','classe_id'];

    public function classe(){
        return $this->belongsTo(Classe::class);
    }
    
    public function module(){
        return $this->belongsToMany(Module::class);
    }
}
