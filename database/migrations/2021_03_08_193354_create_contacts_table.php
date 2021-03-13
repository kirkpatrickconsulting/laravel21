<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('contacts', function (Blueprint $table) {

            $table->increments('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('salutation');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('email_address');
            $table->string('company');
            $table->string('job_title');
            $table->string('department');
            $table->string('website');
            $table->string('office_phone');
            $table->string('mobile_phone');
            $table->string('fax_number');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('contacts');
    }

}
