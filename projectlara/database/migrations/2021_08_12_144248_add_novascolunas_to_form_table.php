<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNovascolunasToFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('form', function (Blueprint $table) {
            $table->string('title');
            $table->text('desciption');
            $table->string('city');
            $table->string('local');
            $table->boolean('private');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form', function (Blueprint $table) {
            $table->string('title');
            $table->text('desciption');
            $table->string('city');
            $table->string('local');
            $table->boolean('private');
        });
    }
}
