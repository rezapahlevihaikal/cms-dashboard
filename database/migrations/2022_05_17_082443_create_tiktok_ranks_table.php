<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiktokRanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiktok_ranks', function (Blueprint $table) {
            $table->id();
            $table->integer('we_rank');
            $table->integer('hs_rank');
            $table->integer('populis_rank');
            $table->integer('konten_jatim_rank');
            $table->integer('we_nilai');
            $table->integer('hs_nilai');
            $table->integer('populis_nilai');
            $table->integer('konten_jatim_nilai');
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
        Schema::dropIfExists('tiktok_ranks');
    }
}
