<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceOrdersServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_orders_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('service_order')->unsigned();
            $table->bigInteger('service')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('service_order')->references('id')->on('service_orders');
            $table->foreign('service')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_orders_services');
    }
}
