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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Titre de l'article
            $table->string('slug')->unique(); // URL-friendly slug
            $table->text('excerpt')->nullable(); // Extrait/chapeau
            $table->longText('content'); // Contenu complet
            $table->string('image')->nullable(); // Image mise en avant
            $table->string('author')->default('Admin'); // Auteur
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft'); // Statut
            $table->integer('views')->default(0); // Nombre de vues
            $table->timestamp('published_at')->nullable(); // Date de publication
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null'); // Auteur (user)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
