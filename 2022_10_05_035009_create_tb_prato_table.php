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
        Schema::create('tb_prato', function (Blueprint $table) {
            $table -> id('idPrato');
            $table -> string ('nomePrato', 60);
            $table -> decimal ('valorPrato', 6,2);
            $table -> string ('ingredientePrato', 100);
            $table -> binary ('fotoPrato');
            
            $table -> unsignedBigInteger ('idTipoPrato');

            $table -> foreign ('idTipoPrato')
                        -> references('idTipoPrato')
                            -> on ('tbTipoPrato');
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
        Schema::dropIfExists('tb_prato');
    }
};
