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
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255);
            $table->string('slug',255);
            $table->text('sumary')->nullable();
            $table->dateTime('date')->nullable();
            $table->integer('view')->nullable();
            $table->text('thumnail_url')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->integer('user_id')->nullable()->unsigned();
            $table->string('tags',255)->nullable();
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
