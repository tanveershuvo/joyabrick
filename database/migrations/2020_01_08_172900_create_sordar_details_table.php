<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSordarDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sordar_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sor_name',50);
            $table->string('sor_address');
            $table->string('sor_type',50);
            $table->string('sor_phone',20);
            $table->integer('com_id');
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
        Schema::dropIfExists('sordar_details');
    }
}
