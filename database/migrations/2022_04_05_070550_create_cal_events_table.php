<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cal_event', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->time('start_time');
            $table->time('finish_time');
            $table->string('venue');
            $table->string('deskripsi');
            $table->string('kategori');
            $table->string('pic');
            $table->timestamp('lastupdate');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cal_event');
    }
}
