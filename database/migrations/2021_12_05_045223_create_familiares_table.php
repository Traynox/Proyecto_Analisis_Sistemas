<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familiares', function (Blueprint $table) {
            $table->increments('id_familiar');
            $table->string('cedula');
            $table->string('nombre_completo');
            $table->date('fecha_nacimiento');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('celular');
            $table->string('correo');
            $table->unsignedInteger('id_nacionalidad');
            $table->foreign('id_nacionalidad')->references('id_nacionalidad')->on('nacionalidades')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('id_identificacion');
            $table->foreign('id_identificacion')->references('id_identificacion')->on('identificaciones')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('id_profesion');
            $table->foreign('id_profesion')->references('id_profesion')->on('profesiones')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('id_parentesco');
            $table->foreign('id_parentesco')->references('id_parentesco')->on('parentescos')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('id_estado');
            $table->foreign('id_estado')->references('id_estado')->on('estados')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('familiares');
    }
}
