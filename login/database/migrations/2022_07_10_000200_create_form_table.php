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
        Schema::create('form', function (Blueprint $table) {
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('usuario');
            $table->string('email');
            $table->string('logradouro');
            $table->string('estado');
            $table->string('pais');
            $table->string('cep');
            $table->string('metododepagamento');
            $table->string('nomedocartao');
            $table->string('numerodocartao');
            $table->string('datadeexpiracao');
            $table->string('cvv'); 
                       
            $table->id('');
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
        Schema::dropIfExists('form');
    }
};
