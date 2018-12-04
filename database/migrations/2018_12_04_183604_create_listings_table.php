<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('body');
            $table->integer('user_id')->unsinged();
            $table->integer('area_id')->unsinged();
            $table->integer('category_id')->unsinged();
            $table->boolean('live')->default(false);
            $table->softDeletes(); 
            $table->timestamps();

            $table->foreign('user_id')->references('id')->onDelete('cascade');
            $table->foreign('area_id')->references('id')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listings');
    }
}
