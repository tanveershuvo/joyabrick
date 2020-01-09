<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cus_id',50);
            $table->string('pro_name',50);
            $table->double('unit_price',10,2);
            $table->integer('quantity');
            $table->double('total_price',100,2);
            $table->double('paid',100,2);
            $table->date('order_date');
            $table->integer('sea_id');
            $table->string('inserted_by',150);
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
        Schema::dropIfExists('order_details');
    }
}
