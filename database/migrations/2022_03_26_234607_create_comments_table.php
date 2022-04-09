<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->default(0)->index('comments_fk2_idx');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->unsignedBigInteger('serie_id')->default(0)->index('comments_fk1_idx');
            $table->foreign('serie_id')->references('id')->on('series')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->mediumText('content');
            $table->dateTime('date')->useCurrent();
            $table->timestamps();
            $table->nestedSet(); //permet de gerer la hierarchisation de nos commentaires
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
