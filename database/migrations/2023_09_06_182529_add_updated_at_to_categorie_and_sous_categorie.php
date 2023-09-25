<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimestampsTocategorieAndsous_categorie extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('categorie', function (Blueprint $table) {
            $table->timestamps(); // Cela ajoutera les colonnes created_at et updated_at
        });

        Schema::table('sous_categorie', function (Blueprint $table) {
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('categorie', function (Blueprint $table) {
            $table->dropTimestamps();
        });

        Schema::table('sous_categorie', function (Blueprint $table) {
            $table->dropTimestamps();
        });
    }
}