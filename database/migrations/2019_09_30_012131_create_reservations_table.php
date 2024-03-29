<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('customer_id');
            // $table->foreign('customer_id')
            //     ->references('id')->on('users')->onUpdate('cascade');
            $table->bigInteger('staff_id');
            // $table->foreign('staff_id')
            //     ->references('id')->on('users')->onUpdate('cascade');
            $table->dateTime('rv_datetime');
            $table->text('rv_comment')->nullable();
            // $table->time('rv_time');
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
        Schema::dropIfExists('reservations');
    }
}
