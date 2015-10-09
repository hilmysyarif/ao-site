<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAoSiteTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->index();
            $table->string('nickname', 50)->index();
            $table->string('email', 100)->unique();
            $table->string('password', 150);
            $table->string('image');
            $table->date('birth')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('visited_at')->nullable();
        });

        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token')->index();
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('password_resets');
        Schema::drop('users');
    }
}
