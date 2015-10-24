<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerrosPerdidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perdidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('colonia');
            $table->mediumInteger('codigo_postal')->nullable();
            $table->string('estado');
            $table->string('raza')->default('mestizo'); 
            $table->string('edad',10);
            $table->string('nombre',10);
            $table->string('foto');
            $table->boolean('tenia_collar')->default(0);
            $table->boolean('tenia_placa')->default(0);
            $table->integer('user_id');
            $table->mediumText('comentarios');
            $table->boolean('encontrado')->default(0);
            $table->boolean('pagado')->default(0);
            $table->string('name');
            $table->string('email');
            $table->string('telefone');
            $table->dateTime('perdido_el');
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
        Schema::drop('perdidos');
    }
}
