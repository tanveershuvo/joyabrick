<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtherDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('rate',20,2);
            $table->integer('quantity');
            $table->string('name',50);
            $table->integer('receipt');
            $table->date('date');
            $table->integer('o_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('other_details');
    }
}
