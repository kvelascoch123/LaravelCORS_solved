<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoPersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
              //
              Schema::create('tipo_persona', function (Blueprint $table) {
                $table->increments('id');
                $table->string('principal');
                $table->string('secundario');
                $table->string('estado');
                $table->string('tipo');
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
        Schema::dropIfExists('tipo_persona');
    }
}
