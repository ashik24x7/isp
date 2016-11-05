<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id')->unsigned()->index();
            $table->string('user_id')->index();
            $table->integer('fk_user_id')->unsigned()->index();
            $table->string('bill')->nullable();
            $table->integer('hit');
            $table->integer('updated_by')->unsigned();
            $table->timestamps();

            $table->foreign('updated_by')->references('id')->on('users');
            $table->foreign('fk_user_id')->references('id')->on('customer_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bills');
    }
}
