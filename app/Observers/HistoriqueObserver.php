<?php

namespace App\Observers;

use App\Models\Tarif;
use App\Models\Module;
use App\Models\Historique;

class HistoriqueObserver
{
    /**
     * Handle the Historique "created" event.
     */
    public function created(Historique $historique): void
    {
        $module = Module::find($historique->module_id);
        
        if ($module) {
            $heure_effectue = $module->historiques->sum('total_heure');
            $cout_horaire = Tarif::find($module->tarif_id)->cout_horaire;
            $montant_total = $heure_effectue * $cout_horaire;

            $module->update(['montant_total' => $montant_total]);
        }
    }

    /**
     * Handle the Historique "updated" event.
     */
    public function updated(Historique $historique): void
    {
        //
    }

    /**
     * Handle the Historique "deleted" event.
     */
    public function deleted(Historique $historique): void
    {
        //
    }

    /**
     * Handle the Historique "restored" event.
     */
    public function restored(Historique $historique): void
    {
        //
    }

    /**
     * Handle the Historique "force deleted" event.
     */
    public function forceDeleted(Historique $historique): void
    {
        //
    }
}
