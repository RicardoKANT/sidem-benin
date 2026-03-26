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
        Schema::create('holidays', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nom de la fête (Noël, Jour de l'an, etc)
            $table->unsignedTinyInteger('month'); // Mois (1-12)
            $table->unsignedTinyInteger('day'); // Jour (1-31)
            $table->foreignId('slider_id')->constrained('slider_infos')->onDelete('cascade'); // Slider associé
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('holidays');
    }
};
