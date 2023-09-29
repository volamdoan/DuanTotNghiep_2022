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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('slug', 255);
            $table->integer('quantily')->nullable();
            $table->float('price')->nullable();
            $table->string('size', 50)->nullable();
            $table->dateTime('date')->nullable();
            $table->string('thumnail', 255)->nullable();
            $table->text('saled')->nullable();
            $table->integer('view')->nullable();
            $table->foreignId('category_id', 11)->nullable()->unsigned();
            $table->foreignId('brand_id', 11)->nullable()->unsigned();
            $table->text('description')->nullable();
            $table->string('tags', 255)->nullable();
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
