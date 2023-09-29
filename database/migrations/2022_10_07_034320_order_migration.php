<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('phone',15)->nullable();
            $table->string('address',255)->nullable();
            $table->string('email',255)->unique()->nullable();
            $table->text('note')->nullable();
            $table->dateTime('order_date')->nullable();
            $table->float('total_price')->nullable();
            $table->dateTime('delivery_date')->nullable();
            $table->integer('user_id')->nullable()->unsigned();
            $table->tinyInteger('status_ship')->nullable();
            $table->tinyInteger('status_pay')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->dateTime('deleted_at')->nullable();
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
        //
    }
};
