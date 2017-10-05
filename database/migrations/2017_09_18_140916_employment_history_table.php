<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmploymentHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employment_history', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('job_title')->nullable();
            $table->string('industry_type')->nullable();
            $table->string('employment_status')->nullable();
            $table->text('reason')->nullable();
            $table->decimal('starting_salary')->nullable();
            $table->decimal('final_salary')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('employees_id')->unsigned()->nullable();
            $table->foreign('employees_id')->references('id')->on('employees')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('employment_history');
    }
}
