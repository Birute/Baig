<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoctailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('coctails', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title');
        $table->text('recipe');
        $table->string('photo');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::create('coctails', function (Blueprint $table) {
        $table->dropcolumn('id');
        $table->dropcolumn('title');
        $table->dropcolumn('recipe');
        $table->dropcolumn('photo');
    });
    }
}
