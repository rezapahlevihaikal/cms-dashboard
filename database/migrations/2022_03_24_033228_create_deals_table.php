<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('team');
            $table->string('owner_fullname');
            $table->string('owner_username');
            $table->string('creator_username');
            $table->string('currency');
            $table->string('size');
            $table->string('cost');
            $table->date('closed_date');
            $table->date('start_date');
            $table->date('expired_date');
            $table->string('pipeline');
            $table->string('stage');
            $table->string('source');
            $table->string('priority');
            $table->string('company');
            $table->string('contacts');
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->string('products');
            $table->string('lost_reason');
            $table->string('deal_status');
            $table->string('competitor_product');
            $table->string('related_outlet');
            $table->string('latest_note1');
            $table->string('latest_gps_checkin1');
            $table->string('latest_note2');
            $table->string('latest_gps_checkin2');
            $table->string('latest_note3');
            $table->string('latest_gps_checkin3');
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
        Schema::dropIfExists('deals');
    }
}
