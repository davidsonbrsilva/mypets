<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceOrderAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_orders_animals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('service_order')->unsigned();
            $table->bigInteger('animal')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('service_order')->references('id')->on('service_orders');
            $table->foreign('animal')->references('id')->on('animals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_orders_animals');
    }
}
