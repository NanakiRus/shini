<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tires', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->string('standardSize', 100);
            $table->string('dia', 3);
            $table->enum('season', ['Зима', 'Лето', 'Всесезонная']);
            $table->string('brand', 100);
            $table->string('model', 200);
            $table->integer('amount')->nullable();
            $table->text('specification')->nullable();
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
        Schema::dropIfExists('tires');
    }
}
