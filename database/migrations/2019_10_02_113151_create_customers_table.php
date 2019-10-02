<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->bigInteger('customer_id');
            // $table->foreign('customer_id')
            //     ->references('id')->on('users')->onUpdate('cascade');
            // $table->string('name_kanji');
            // $table->string('name_kana');
            // $table->string('sex');
            // $table->dateTime('birth');
            // $table->integer('tel');
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
        Schema::dropIfExists('customers');
    }
}
