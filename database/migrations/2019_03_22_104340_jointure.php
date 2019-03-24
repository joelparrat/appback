<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Jointure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Jointure', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('equipe');              // forein key equipe
            $table->unsignedInteger('enigme');              // forein key enigme
            $table->datetime('debut')->nullable();          // date/heure de debut de l'equipe
            $table->datetime('fin')->nullable();            // date/heure de fin de l'enigme
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Jointure');
    }
}
