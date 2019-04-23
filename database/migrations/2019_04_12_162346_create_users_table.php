<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->boolean('active')->default(true);

            $table->string('address');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('users');
    }
}