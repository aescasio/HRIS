<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggerFullname extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('

CREATE
    
    TRIGGER `hris`.`FullName` BEFORE INSERT
    ON `hris`.`employees`
    FOR EACH ROW BEGIN
	SET NEW.full_name = CONCAT(NEW.first_name, \' \', LEFT(NEW.middle_name, 1), \'. \', NEW.last_name);
    END

        
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `hris`.`FullName`');
    }
}
