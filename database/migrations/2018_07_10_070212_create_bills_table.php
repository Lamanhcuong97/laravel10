<?php

use Illuminate\Support\Facades\Schema;
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
            $table->increments('id');
            $table->string('customer_name')->nullable();
            $table->mediumText('customer_address')->nullable();
            $table->integer('customer_phone')->nullable();
            $table->integer('email')->nullable();
            $table->float('total');
            $table->float('interest');
            $table->integer('customer_id')->nullable();
            $table->string('promotion_code')->nullable();
            $table->tinyInteger('status');
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
        Schema::dropIfExists('bills');
    }
}
