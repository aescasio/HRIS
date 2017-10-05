<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->dateTime('birth_date')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('sss')->nullable();
            $table->string('phic')->nullable();
            $table->string('hdmf')->nullable();
            $table->string('bir')->nullable();
            $table->string('tax_code');
            $table->string('drivers_license')->nullable();
            $table->integer('sick_leave')->nullable();
            $table->integer('vacation_leave')->nullable();
            $table->integer('emergency_leave')->nullable();
            $table->string('status')->nullable();
            $table->string('email')->nullable();
            $table->string('civil_status');
            $table->string('nationality');
            $table->string('religion')->nullable();
            $table->string('contact_numbers')->nullable();
            $table->text('present_address');
            $table->text('permanent_address')->nullable();
            $table->string('affiliations')->nullable();
            $table->string('professional_license')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees');
    }
}
