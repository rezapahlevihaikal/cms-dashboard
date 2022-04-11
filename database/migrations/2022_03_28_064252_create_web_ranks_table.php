<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebRanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_ranks', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->integer('we');
            $table->integer('hs');
            $table->integer('populis');
            $table->integer('topcore');
            $table->timestamp('lastupdate');
            $table->integer('we_tv');
            $table->integer('we_nilai');
            $table->integer('hs_nilai');
            $table->integer('populis_nilai');
            $table->integer('tc_nilai');
            $table->integer('tv_nilai');
            // $table->timestamps()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web_ranks');
    }
}
