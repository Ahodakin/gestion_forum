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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('content');
            // $table->foreignId('id_users')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreignId('id_sous_categorie')->constrained('sous_categorie')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users');

            $table->unsignedBigInteger('id_sous_categorie');
            $table->foreign('id_sous_categorie')->references('id')->on('sous_categorie');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
