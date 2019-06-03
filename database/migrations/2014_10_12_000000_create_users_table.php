<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('token_id')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email_id1')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('user_type')->default('leader');
            $table->string('email_id2')->nullable();
            $table->string('password');
            $table->boolean('active')->nullable();
            $table->integer('attempts')->nullable();
            $table->boolean('lock')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
