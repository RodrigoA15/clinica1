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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('cedula_cliente', 12);
            $table->string('nombre_cliente', 40);
            $table->string('apellido_cliente', 40);
            $table->string('correo_cliente', 40);
            $table->string('celular_cliente', 40);
            $table->string('direccion_cliente', 40);
            $table->enum("estado", ["activo", "inactivo"]);

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
        Schema::dropIfExists('clientes');
    }
};
