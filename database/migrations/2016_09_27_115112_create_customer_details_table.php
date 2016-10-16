<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('previous_bill_info',50)->nullable();
            $table->string('ip',50)->nullable();
            $table->string('user_id',50);
            $table->string('username',50);
            $table->string('password',100);
            $table->string('pass_reset_token',100);
            $table->string('contact_no',50);
            $table->string('additional_contact_no',50)->nullable();
            $table->string('email',50)->nullable();
            $table->string('house',50);
            $table->string('road',50);
            $table->string('block',50);
            $table->string('address',50)->nullable();
            $table->string('floor',50);
            $table->string('bill',50);
            $table->date('connection_up');
            $table->string('connection_establishment_info',50);
            $table->string('connected_from',50);
            $table->string('note',500)->nullable();
            $table->string('customer_photo')->nullable();
            $table->string('id_or_passport')->nullable();
            $table->string('updated_by',50);
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customer_details');
    }
}
