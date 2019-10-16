<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->softDeletes();
            $table->bigInteger('requested_by')->unsigned();
            $table->bigInteger('animal')->unsigned();
            $table->bigInteger('accepted_by')->unsigned()->nullable();
            $table->bigInteger('status')->default(1)->unsigned();
            $table->foreign('requested_by')->references('id')->on('users');
            $table->foreign('animal')->references('id')->on('animals');
            $table->foreign('accepted_by')->references('id')->on('users');
            $table->foreign('status')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_orders');
    }
}
