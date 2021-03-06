<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->id('idFicha');
            $table->enum('Jornada',['Diurna','Mixta','Nocturna']);
            $table->enum('estado',['Activo','Inactivo']);

            //
            $table->bigInteger('idPformacion')->unsigned();
            $table->foreign('idPformacion')->references('Codigo')->on('programasdeformacion');

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
        Schema::dropIfExists('fichas');
    }
}
