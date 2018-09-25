<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCongesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Type');
            $table->string('Nom_emp');
            $table->unsignedInteger('Duree');
            $table->date('Date_Debut');
            $table->date('Date_Fin');
            $table->text('Observation')->nullable();
            $table->unsignedInteger('employe_id')->references('id')->on('employes')->nullable();
            $table->string('Livreur')->nullable();
            $table->date('Date_Recu')->nullable();
            $table->date('Date_Retour');
            $table->string('Medecin')->nullable();
            $table->date('Date_visite')->nullable();
            $table->text('Adresse_medecin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conges');
    }
}
