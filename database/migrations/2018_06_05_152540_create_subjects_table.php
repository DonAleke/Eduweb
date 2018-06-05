<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('user_id');
        $table->boolean('Maths')->default(0)->nullable();
        $table->boolean('English')->default(0)->nullable();
        $table->boolean('Chemistry')->default(0)->nullable();
        $table->boolean('Geography')->default(0)->nullable();
        $table->boolean('History')->default(0)->nullable();
        $table->boolean('CRE')->default(0)->nullable();
        $table->boolean('Music')->default(0)->nullable();
        $table->boolean('Physics')->default(0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
