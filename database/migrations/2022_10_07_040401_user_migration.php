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
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100)->nullable();
            $table->string('email',255)->unique()->nullable();
            $table->string('password',255);
            $table->string('phone',15)->nullable();
            $table->string('avatar',255)->nullable();
            $table->string('address',255)->nullable();
            $table->tinyInteger('role')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->string('remember_token',255)->nullable();
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
