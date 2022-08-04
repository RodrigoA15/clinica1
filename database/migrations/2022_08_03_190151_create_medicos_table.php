<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->id();
            $table->string('cedula_medico', 12);
            $table->string('nombre_medico', 40);
            $table->string('apellido_medico', 40);
            $table->string('correo_medico', 40);
            $table->string('celular_medico', 40);
            $table->string('direccion_medico', 40);
            $table->string('especialidad_medico', 40);


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
        Schema::dropIfExists('medicos');
    }
};
