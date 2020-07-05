<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->bigIncrements('artikel_id', true)->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('artikel_judul')->nullable();
            $table->string('artikel_isi')->nullable();
            $table->timestamp('artikel_create')->useCurrent();
            $table->timestamp('artikel_update')->nullable();
            $table->string('artikel_slug')->nullable();
            $table->string('artikel_tag')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikel');
    }
}
