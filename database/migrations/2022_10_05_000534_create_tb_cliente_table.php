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
        Schema::create('tb_cliente', function (Blueprint $table) {
            $table->id();
            $table -> string ('nomeCliente', 300);
            $table -> char ('cpfCliente', 14);
            $table -> char ('rgCliente', 13);
            $table -> string ('senhaCliente', 255);
            $table -> string ('fotoCliente');
            $table -> string ('emailCliente', 100);
            $table -> char ('cepCliente', 9);
            $table -> string ('ruaCliente', 100);
            $table -> string ('numCasa', 5);
            $table -> string ('bairroCliente', 100);
            $table -> string ('cidadeCliente', 100);
            $table -> string ('estadoCliente', 40);
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
        Schema::dropIfExists('tb_cliente');
    }
};
