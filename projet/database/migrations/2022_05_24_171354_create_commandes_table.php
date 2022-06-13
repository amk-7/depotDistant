<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->bigIncrements('numCommande');
            $table->integer('montant');
            $table->date('dateCommande');
            $table->bigInteger('client_id');
            $table->bigInteger('employe_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('client_id')->references('numClient')->on('clients');
            $table->foreign('employe_id')->references('numEmploye')->on('employes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
}
