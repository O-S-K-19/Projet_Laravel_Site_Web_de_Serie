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
            $table->unsignedBigInteger('author_id')->default(0)->index('series_fk1_idx');
            $table->foreign('author_id')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->mediumText('title');
            $table->longText('content');
            $table->longText('acteurs');
            $table->string('url', 200)->unique('url_UNIQUE');
            $table->text('tags')->nullable();
            $table->dateTime('date')->useCurrent();
            $table->string('status', 45)->default('draft');
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
