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
            $table->string('title');
            $table->longtext('description');
            $table->longtext('thumb');
            $table->string('price');
            $table->string('series');
            $table->date('sale_date');
            $table->string('type');
            $table->text('artists');
            $table->text('writers');
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