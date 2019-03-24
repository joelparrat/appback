<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('User', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('prenom', 128);                  // prenom utilisateur (joueur/master)
            $table->string('nom', 128);                     // nom utilisateur (joueur/master)
            $table->string('password', 64);                 // mot de passe
            $table->string('type', 1);                      // 0 master salle 1 master mobile 2 joueur
            $table->string('filiere');                      // dta ...
            $table->unsignedInteger('equipe');              // forein key equipe
            $table->string('salle', 128);                   // lieu
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
        Schema::dropIfExists('User');
    }
}
