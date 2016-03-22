<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVirticalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('verticals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('domain')->index();
            $table->string('vertical_id')->index();
            $table->string('vertical_secret')->index();
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
         Schema::drop('verticals');
    }
}
