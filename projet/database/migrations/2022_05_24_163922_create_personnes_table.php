<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Définire les colonnes de la table personnes
        Schema::create('personnes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom')->nullable();
            $table->string('sexe');
            $table->string('email')->unique();
            $table->string('dateNaiss');
            $table->json('adresse')->nullable();
            $table->string('telephone')->nullable();
            $table->timestamps(); // crée deux colonnes : create_at et update_at
            $table->softDeletes(); // crée une colonnes delete_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnes');
    }
}
