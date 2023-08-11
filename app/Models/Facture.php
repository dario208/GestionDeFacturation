<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['solde_totale','statut','prof_id','date_paiement','date_facturation'];

    // Relation Many-to-One : Une facture appartient à un professeur
    public function professeur()
    {
        return $this->belongsTo(Prof::class);
    }
}
