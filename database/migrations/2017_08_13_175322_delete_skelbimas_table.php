<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteSkelbimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('nuotrauka');
        Schema::dropIfExists('skelbimas');
        Schema::dropIfExists('skelbimai');
        Schema::table('automobilis', function (Blueprint $table) {
            $table->tinyInteger('aktyvus')->default(1);
            $table->date('patalpinimo_data')->nullable();
            $table->date('pardavimo_data')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
