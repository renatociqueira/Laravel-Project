<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNcolunaseventsToEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->string('namefunc');
            $table->integer('rgfunc');
            $table->string('nameacomp');
            $table->integer('rgacomp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->string('namefunc');
            $table->integer('rgfunc');
            $table->string('nameacomp');
            $table->integer('rgacomp');
        });
    }
}
