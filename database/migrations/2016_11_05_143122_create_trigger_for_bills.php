<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTriggerForBills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         DB::unprepared('CREATE TRIGGER `add_bill_to_history` BEFORE DELETE ON `bills` FOR EACH ROW
                   INSERT INTO `bill_histories` SET
                   `user_id` = OLD.`user_id`,
                   `fk_user_id` = OLD.`fk_user_id`,
                   `bill` = OLD.`bill`,
                   `due` = OLD.`due`,
                   `total` = OLD.`total`,
                   `pay` = OLD.`pay`,
                   `due_after_pay` = OLD.`due_after_pay`,
                   `tnx` = OLD.`tnx`,
                   `hit` = OLD.`hit`,
                   `created_at` = OLD.`created_at`,
                   `updated_by` = OLD.`updated_by`
                ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `add_bill_to_history`');
    }
}
