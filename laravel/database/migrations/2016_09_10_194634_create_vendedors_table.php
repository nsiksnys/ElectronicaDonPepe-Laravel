<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vendedor', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            //atributos de la tabla
            $table->string('nombre');
            $table->string('apellido');
            $table->boolean('activo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Vendedor');
    }
}
