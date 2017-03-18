<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiresQuantityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tires_quantity', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('one')->default(0);
            $table->boolean('two')->default(0);
            $table->boolean('four')->default(0);

            $table->integer('tires_id')->unsigned();

            $table->foreign('tires_id')->references('id')->on('tires')->onDelete('cascade');

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
        Schema::dropIfExists('tires_quantity');
    }
}
