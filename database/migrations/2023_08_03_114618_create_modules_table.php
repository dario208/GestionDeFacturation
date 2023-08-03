<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('type');
            $table->integer('heure_globale');
            $table->foreignId('prof_id')->constrained();
            $table->foreignId('classe_id')->constrained();
            $table->foreignId('tarif_id')->constrained();

            $table->index('nom');
            $table->index('type');
            $table->index('heure_globale');
            $table->index('prof_id');
            $table->index('classe_id');
            $table->index('tarif_id');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
