<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_histories', function (Blueprint $table) {
            $table->increments('id')->unsigned()->index();
            $table->string('user_id')->index();
            $table->integer('fk_user_id')->unsigned()->index();
            $table->integer('bill');
            $table->integer('due');
            $table->integer('total');
            $table->integer('pay')->nullable();
            $table->integer('due_after_pay');
            $table->string('tnx')->nullable();
            $table->string('hit')->nullable();
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
        Schema::drop('bill_histories');
    }
}
