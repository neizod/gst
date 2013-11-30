<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    public function up() {
        Schema::create('users', function($table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('name')->unique();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::drop('users');
    }

}