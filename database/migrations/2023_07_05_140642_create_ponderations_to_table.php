<?php

use App\Models\Classe;
use App\Models\Discipline;
use App\Models\Evaluation;
use App\Models\AnneeScolaire;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ponderations', function (Blueprint $table) {
            $table->id();
            $table->integer('note_max');
            $table->foreignIdFor(Discipline::class);
            $table->foreignIdFor(Evaluation::class);
            $table->foreignIdFor(Classe::class);
            $table->foreignIdFor(AnneeScolaire::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ponderations');
    }
};
