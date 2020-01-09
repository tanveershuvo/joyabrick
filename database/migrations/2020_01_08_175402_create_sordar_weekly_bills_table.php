<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSordarWeeklyBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sordar_weekly_bills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('weekly_bill_id');
            $table->string('sor_id',50);
            $table->date('date');
            $table->double('weekly_bill');
            $table->string('paid_by');
            $table->string('pay_id');
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
        Schema::dropIfExists('sordar_weekly_bills');
    }
}
