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
        Schema::create('tb_restaurante', function (Blueprint $table) {
            $table->id();
            $table -> string ('nomeRestaurante', 300);
            $table -> char ('cpfRestaurante', 14);
            $table -> char ('telRestaurante', 13);
            $table -> string ('loginRestaurante', 100);
            $table -> string ('senhaRestaurante', 255);
            $table -> binary ('fotoRestaurante');
            $table -> string ('emailRestaurante', 100);
            $table -> char ('cepRestaurante', 9);
            $table -> string ('ruaRestaurante', 100);
            $table -> string ('numCasa', 5);
            $table -> string ('bairroRestaurante', 100);
            $table -> string ('cidadeRestaurante', 100);
            $table -> string ('estadoRestaurante', 40);
            $table -> integer ('capMaximaRestaurante');
            $table -> unsignedBigInteger('tiporestaurante_id');
            $table -> unsignedBigInteger('prato_id');
           
            $table->timestamps();

            // Foreign Key
            $table -> foreign('tiporestaurante_id')
                        -> references('id')
                            -> on('tb_tipo_restaurante');

            $table -> foreign('prato_id')
                        -> references('id')
                            -> on('tb_tipo_restaurante');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_restaurante');
    }
};
