<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username', 80);
            $table->string('name', 100)->nullable();
            $table->date('birthday')->nullable();
            $table->text('bio')->nullable();
            $table->string('profile_photo', 256)->nullable();
            $table->string('cover_photo', 256)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->bigInteger('animal_type')->unsigned();
            $table->bigInteger('animal_bleed')->unsigned();
            $table->foreign('animal_type')->references('id')->on('animal_types');
            $table->foreign('animal_bleed')->references('id')->on('animal_bleeds');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
