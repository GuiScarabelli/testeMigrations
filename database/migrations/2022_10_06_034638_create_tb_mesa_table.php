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
        Schema::create('tb_mesa', function (Blueprint $table) {
            $table -> id();
            $table -> integer('quantAcentosMesa');
            $table -> integer('statusMesa');
            $table -> integer ('numMesa');
            $table -> unsignedBigInteger('restaurante_id');
            $table -> timestamps();


            //Foreign Key
            $table -> foreign ('restaurante_id')
                        -> references('id')
                            -> on ('tb_Restaurante');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_mesa');
    }
};
