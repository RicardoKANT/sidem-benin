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
        Schema::create('slider_infos', function (Blueprint $table) {
            $table->id();
            $table->string('subtitle')->default('Nos Services');
            $table->string('title')->default('Prêt à accélérer votre transformation digitale ?');
            $table->string('animated_text')->default('Camping');
            $table->text('description')->nullable();
            $table->string('cta_button_text')->default('Nous contacter');
            $table->string('secondary_button_text')->default('Who we are');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slider_infos');
    }
};
