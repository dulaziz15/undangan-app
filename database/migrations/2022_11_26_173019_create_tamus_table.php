<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamus', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_undangan')->unsigned()->index()->nullable();
            $table->string('nama');
            $table->string('alamat');
            $table->string('url_undangan');
            $table->string('url_presensi');
            $table->foreign('id_undangan')->references('id')->on('undangans');
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
        Schema::dropIfExists('tamus');
    }
};
