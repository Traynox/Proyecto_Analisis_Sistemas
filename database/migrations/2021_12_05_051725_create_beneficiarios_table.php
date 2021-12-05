<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiarios', function (Blueprint $table) {
            $table->increments('id_beneficiario');
            $table->string('cedula');
            $table->string('nombre_completo');
            $table->string('detalle');
            $table->decimal('valor_beneficio', $precision = 19, $scale = 2);
            $table->string('telefono');
            $table->string('celular');
            $table->string('direccion');
            $table->string('correo');
            $table->unsignedInteger('id_nacionalidad');
            $table->foreign('id_nacionalidad')->references('id_nacionalidad')->on('nacionalidades')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('id_identificacion');
            $table->foreign('id_identificacion')->references('id_identificacion')->on('identificaciones')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('beneficiarios');
    }
}
