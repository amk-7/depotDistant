<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->bigIncrements('numEmploye');
            $table->string('nomUtilisateur');
            $table->string('motDePasse');
            $table->string('avatar')->nullable();
            $table->boolean('status');
            $table->bigInteger('id_personne');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_personne')->references('id')->on('personnes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employes');
    }
}
