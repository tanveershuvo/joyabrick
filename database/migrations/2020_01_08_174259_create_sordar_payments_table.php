<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSordarPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sordar_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sor_id',50);
            $table->string('pay_id',50);
            $table->double('advance',100,2);
            $table->date('date');
            $table->integer('sea_id');
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
        Schema::dropIfExists('sordar_payments');
    }
}
