<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSordarDeliveryStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sordar_delivery_statuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('receipt_no',50);
            $table->date('delivery_date');
            $table->double('amount',100,2);
            $table->double('rate',100,2);
            $table->double('total_bill',100,2);
            $table->string('inserted_by');
            $table->integer('sea_id');
            $table->string('sor_id');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sordar_delivery_statuses');
    }
}
