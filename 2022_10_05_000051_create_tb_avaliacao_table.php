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
        Schema::create('tb_avaliacao', function (Blueprint $table) {
            $table->id('idAvaliacao');
            $table -> date('dtAvaliacao');
            $table -> integer('notaAvaliacao');
            $table -> string('descAvaliacao', 100);
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
        Schema::dropIfExists('tb_avaliacao');
    }
};
