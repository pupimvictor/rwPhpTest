<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundmonetiseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fundmonetise', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('fundid');
            $table->integer('rate');
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fundmonetise', function (Blueprint $table) {
            //
        });
    }
}
