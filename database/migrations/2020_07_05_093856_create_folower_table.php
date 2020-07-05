<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFolowerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folower', function (Blueprint $table) {
            $table->bigIncrements('folow_id', true)->unsigned();
            $table->bigInteger('userid')->unsigned();
            $table->bigInteger('folowing')->unsigned();
            $table->foreign('userid')->references('id')->on('users');
            $table->foreign('folowing')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('folower');
    }
}
