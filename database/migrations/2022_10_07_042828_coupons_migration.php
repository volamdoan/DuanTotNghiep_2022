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
        Schema::create('coupons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 50);
            $table->string('name', 255);
            $table->text('content')->nullable();
            $table->integer('quantily')->nullable();
            $table->enum('type', ['fixed', 'percent']);
            $table->enum('status', ['enable', 'disable'])->default('disable');
            $table->dateTime('start_at')->nullable();
            $table->dateTime('expired_at')->nullable();
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
