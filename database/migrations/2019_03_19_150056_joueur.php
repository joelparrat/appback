<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Joueur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Joueur', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('prenom');
            $table->string('nom');
            $table->string('filiere');
            $table->string('couleur');
            $table->string('equipe');
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
        Schema::dropIfExists('Joueur');
    }
}
