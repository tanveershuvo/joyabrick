<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJalaniDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jalani_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('rate');
            $table->string('type',50);
            $table->integer('quantity');
            $table->integer('rental');
            $table->string('receipt',20);
            $table->date('date');
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
        Schema::dropIfExists('jalani_details');
    }
}
