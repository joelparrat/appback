<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Equipe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Equipe', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('no', 32);                       // numero de l'equipe
            $table->string('couleur', 32);                  // couleur de l'equipe
            $table->datetime('depart')->nullable();         // date heure de lancement de la partie
            //$table->datetime('chrono')->default(Now());   // date heure de lancement de la partie
            $table->time('chrono');                         // chrono en h/m/s
            $table->string('niveau', 2);                    // 0 aucune enigme de resolu 1 ...
            $table->string('etat', 2);                      // 0 partie non commencee 1 partie en cours 2 partie finie 
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
        Schema::dropIfExists('Equipe');
    }
}
