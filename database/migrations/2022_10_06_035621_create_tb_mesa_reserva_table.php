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
        Schema::create('tb_mesa_reserva', function (Blueprint $table) {
            $table->id();
            $table -> unsignedBigInteger ('mesa_id');
            $table -> unsignedBigInteger ('reserva_id');
            $table->timestamps();

            //Foreign Key

            $table -> foreign('mesa_id')
                        ->references('id')
                            -> on('tb_mesa');


            $table -> foreign('reserva_id')
                        ->references('id')
                            -> on('tb_reserva');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_mesa_reserva');
    }
};
