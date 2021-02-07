<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAprendicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprendices', function (Blueprint $table) {
            $table->id();
            $table->string('Documento',75);
            $table->string('Nombre',75);
            $table->string('Apellidos',75);
            $table->string('Correo',75);
            $table->dateTime('FechaNacimiento');
            $table->enum('Genero',['Masculino','Femenino','No-Binario']);
            $table->enum('TipoDocumento',['TI','CC','CE','PS']);

            $table->bigInteger('idFicha')->unsigned();
            $table->foreign('idFicha')->references('idFicha')->on('fichas');

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
        Schema::dropIfExists('aprendices');
    }
}
