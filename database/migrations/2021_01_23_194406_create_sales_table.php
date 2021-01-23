<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->dateTime('created_date');

            $table->bigInteger('client_id')->unsigned()->nullable();
            $table->foreign('client_id')->references('id')->on('clients')->onUpdate('RESTRICT')->onDelete('RESTRICT');

            $table->bigInteger('vendor_id')->unsigned()->nullable();
            $table->foreign('vendor_id')->references('id')->on('vendors')->onUpdate('RESTRICT')->onDelete('RESTRICT');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
