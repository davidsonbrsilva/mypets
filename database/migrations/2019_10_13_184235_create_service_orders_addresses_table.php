<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceOrdersAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_orders_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('service_order')->unsigned();
            $table->bigInteger('address')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('service_order')->references('id')->on('service_orders');
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
        Schema::dropIfExists('service_orders_addresses');
    }
}
