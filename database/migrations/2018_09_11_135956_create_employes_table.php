<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('employes');
        Schema::create('employes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nom')->unique();
            $table->string('Fonction')->nullable();
            $table->unsignedInteger('Num_Somme');
            $table->string('Grade');
            $table->string('Echelon')->nullable();
            $table->date('Date_Naissance')->nullable();
            $table->string('Situation_familiale')->nullable();
            $table->unsignedInteger('Nbr_enfants')->nullable();
            $table->string('CIN')->unique();
            $table->text('Adresse')->nullable();
            $table->string('Tel')->nullable();
            $table->string('Saj')->nullable();
            $table->date('Date_embauche');
            $table->boolean('Retraite')->default(0);
            $table->date('Date_retraite')->nullable();
            $table->boolean('Mute')->default(0);
            $table->string('Statut')->default('Actif');
            $table->string('Photo')->nullable();
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
        Schema::dropIfExists('employes');
    }
}
