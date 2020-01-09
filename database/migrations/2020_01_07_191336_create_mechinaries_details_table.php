<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMechinariesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mechinaries_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('rate');
            $table->string('type',20);
            $table->string('quantity',50);
            $table->string('name',50);
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
        Schema::dropIfExists('mechinaries_details');
    }
}
