<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLignesCommandesTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('lignes_commandes', function (Blueprint $table) {
            $table->bigIncrements('numLigne');
            $table->integer('quantiteCommande');
            $table->boolean('status');
            $table->bigInteger('produit_id');
            $table->bigInteger('commande_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('produit_id')->references('numProduit')->on('produits');
            $table->foreign('commande_id')->references('numCommande')->on('commandes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lignes_commandes');
    }
}
