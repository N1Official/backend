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
        Schema::create('cipohirdetesek', function (Blueprint $table) {
            $table->id("azon")->autoIncrement();
            $table->string("gyarto",12)->nullable(false);
            $table->string("nev",12)->nullable(false);
            $table->string("szin",12)->nullable(false);
            $table->string("nem",5)->nullable(false);
            $table->integer("meret")->nullable(false);
            $table->integer("ar")->nullable(false);
            $table->dateTime("lejarat")->nullable(false);
            $table->integer("aktiv")->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cipohirdetesek');
    }
};
