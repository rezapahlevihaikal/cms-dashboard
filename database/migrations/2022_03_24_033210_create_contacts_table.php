<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('owner_name');
            $table->string('owner_username');
            $table->string('team');
            $table->string('creator_name');
            $table->string('creator_username');
            $table->string('job_title');
            $table->string('contact_email');
            $table->string('phone_number');
            $table->string('status');
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->string('zipcode');
            $table->string('date_of_birth');
            $table->string('source');
            $table->string('sex');
            $table->string('avg_annual_income');
            $table->string('company_name');
            $table->string('company_website');
            $table->string('deal');
            $table->string('customer');
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
        Schema::dropIfExists('contacts');
    }
}
