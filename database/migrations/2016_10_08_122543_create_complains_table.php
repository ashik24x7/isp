<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complains', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('username');
            $table->string('contact_no');
            $table->string('connected_from');
            $table->text('complain');
            $table->text('support_given_by')->nullable();
            $table->integer('received_by')->unsigned();
            $table->integer('solved_by')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('received_by')->references('id')->on('users');
            $table->foreign('solved_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('complains');
    }
}
