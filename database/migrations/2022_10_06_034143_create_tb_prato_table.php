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
            $table -> id();
            $table -> string ('nomePrato', 60);
            $table -> decimal ('valorPrato', 6,2);
            $table -> string ('ingredientePrato', 100);
            $table -> binary ('fotoPrato');
            $table -> unsignedBigInteger('tipoprato_id');
            $table -> unsignedBigInteger('restaurante_id');
            // Foreign key
            $table -> foreign('tipoprato_id') -> references('id') -> on ('tb_tipo_prato');

            $table -> foreign('restaurante_id') -> references('id') -> on ('tb_restaurante');
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
