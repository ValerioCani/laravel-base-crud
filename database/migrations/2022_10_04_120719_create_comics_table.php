<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->char('title', 100);
            $table->text('description');
            $table->string('thumb', 255);
            $table->string('price', 10);
            $table->string('series', 50);
            $table->string('sale_date', 20);
            $table->string('type', 30);
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
        Schema::dropIfExists('comics');
    }
}
