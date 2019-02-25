<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->foreign('role')->references('id')->on('role');
    });
        Schema::table('meal', function (Blueprint $table) {

            $table->foreign('category')->references('id')->on('category');
        });

        Schema::table('menu', function (Blueprint $table) {

            $table->foreign('meal')->references('id')->on('meal');
        });
        Schema::table('meal_menu', function (Blueprint $table) {

            $table->foreign('meal')->references('id')->on('meal');
            $table->foreign('menu')->references('id')->on('menu');
        });
        Schema::table('order', function (Blueprint $table) {

            $table->foreign('user')->references('id')->on('users');
            $table->foreign('menu')->references('id')->on('menu');
            $table->foreign('meal')->references('id')->on('meal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->foreign('role')->references('id')->on('role');
        });
        Schema::table('meal', function (Blueprint $table) {

            $table->foreign('category')->references('id')->on('category');
        });

        Schema::table('menu', function (Blueprint $table) {

            $table->foreign('meal')->references('id')->on('meal');
        });
        Schema::table('meal_menu', function (Blueprint $table) {

            $table->foreign('meal')->references('id')->on('meal');
            $table->foreign('menu')->references('id')->on('menu');
        });
        Schema::table('order', function (Blueprint $table) {

            $table->foreign('user')->references('id')->on('users');
            $table->foreign('menu')->references('id')->on('menu');
            $table->foreign('meal')->references('id')->on('meal');
        });
    }
}
