<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_reserva', function (Blueprint $table) {
            $table->id ();
            $table->date ('datareserva');
            $table->time ('horaReserva');
            $table->integer ('numPessoas');
            $table -> unsignedBigInteger ('cliente_id');
            $table -> unsignedBigInteger ('restaurante_id');
            $table -> unsignedBigInteger ('statusreserva_id');
            $table -> unsignedBigInteger ('avaliacao_id');
            $table -> timestamps();

            //Foreign Key

            $table -> foreign('cliente_id')
                        -> references('id')
                            -> on('tb_Cliente');


            $table -> foreign('restaurante_id')
                        -> references('id')
                            -> on('tb_Restaurante');


            $table -> foreign('statusreserva_id')
                        -> references('id')
                            -> on('tb_status_reserva');


            $table -> foreign('avaliacao_id')
                        -> references('id')
                            -> on('tb_Avaliacao');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_reserva');
    }
};
