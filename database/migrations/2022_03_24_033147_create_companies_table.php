<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('owner_name');
            $table->string('owner_username');
            $table->string('team');
            $table->string('creator_name');
            $table->string('creator_username');
            $table->string('website');
            $table->string('phone_number');
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->string('zipcode');
            $table->string('type');
            $table->string('employees_number');
            $table->string('source');
            $table->string('annual_revenue');
            $table->string('deal');
            $table->string('contact');
            $table->string('industry');
            $table->string('business_registration_number');
            $table->string('parent_company');
            $table->string('nama_dirut');
            $table->string('latest_note1');
            $table->string('latest_note2');
            $table->string('latest_note3');
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
        Schema::dropIfExists('companies');
    }
}
