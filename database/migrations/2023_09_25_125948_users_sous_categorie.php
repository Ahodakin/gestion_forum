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
        Schema::create('users_sous_categorie', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_users')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_sous_categorie')->constrained('sous_categorie')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};