<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerrosEncontrados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encontrados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('colonia');
            $table->mediumInteger('codigo_postal')->nullable();
            $table->string('estado');
            $table->string('raza')->default('mestizo'); 
            $table->boolean('tenia_collar')->default(0);
            $table->boolean('tenia_placa')->default(0);            
            $table->mediumText('comentarios');
            $table->string('foto');
            $table->boolean('en_casa')->default(0);            
            $table->dateTime('encontrado_el');
            $table->string('name');
            $table->string('email');
            $table->string('telefone');
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            //$table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('encontrados');
    }
}
