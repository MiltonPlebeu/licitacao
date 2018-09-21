<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicitacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licitacaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->string('objeto');
            $table->integer('numlicitacao');
            $table->date('dataabertura');
            $table->string('status');
            $table->string('documentos');
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
        Schema::dropIfExists('licitacaos');
    }
}
