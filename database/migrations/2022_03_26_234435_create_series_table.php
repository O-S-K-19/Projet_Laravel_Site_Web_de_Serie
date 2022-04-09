<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->default(0)->index('series_fk1_idx');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            //$table->mediumText('authors');
            $table->mediumText('title');
            $table->longText('content');
            $table->longText('actors')->nullable();;
            $table->mediumText('category')->nullable();;
            $table->string('url', 255)->unique();
            $table->string('status', 45)->default('draft')->nullable();
            $table->dateTime('year');
            $table->string('image', 255)->default('none')->nullable();
            $table->string('movie', 255)->default('none')->nullable();
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
        Schema::dropIfExists('series');
    }

}
