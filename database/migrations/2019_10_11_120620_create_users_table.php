<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('username', 30)->unique();
            $table->string('name', 80);
            $table->string('last_name', 100);
            $table->string('email', 256)->unique();
            $table->string('password', 256);
            $table->date('birthday');
            $table->bigInteger('address')->unsigned()->nullable();
            $table->string('phone', 30);
            $table->boolean('is_admin')->default(false);
            $table->boolean('is_caregiver')->default(false);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('address')->references('id')->on('addresses');
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
