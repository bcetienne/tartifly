<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            $table->string('country');
            $table->string('city');
            $table->date('date_begin');
            $table->date('date_end');
            $table->double('cost');
            $table->string('photo');
            $table->string('description');
            $table->boolean('dispo');
            $table->unsignedInteger('user_id');
            $table->date('updated_at');
            $table->date('created_at');
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travels');
    }
}
