<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments("id");
            $table->string('nombre');
            $table->string('email')->unique();
            $table->integer('telefono');
            $table->string('titulo');
            
        });
    }
public function down()
    {
        Schema::dropIfExists('users');
    }
}
