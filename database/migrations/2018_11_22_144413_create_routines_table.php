<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routines', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->text('description')->nullable();

            $table->unsignedInteger('ex1');
            $table->foreign('ex1')->references('id')->on('exercises');

            $table->integer('ex1_num');

            $table->unsignedInteger('ex2')->nullable();
            $table->foreign('ex2')->references('id')->on('exercises');

            $table->integer('ex2_num')->nullable();

            $table->unsignedInteger('ex3')->nullable();
            $table->foreign('ex3')->references('id')->on('exercises');

            $table->integer('ex3_num')->nullable();

            $table->unsignedInteger('ex4')->nullable();
            $table->foreign('ex4')->references('id')->on('exercises');

            $table->integer('ex4_num')->nullable();

            $table->unsignedInteger('ex5')->nullable();
            $table->foreign('ex5')->references('id')->on('exercises');

            $table->integer('ex5_num')->nullable();

            $table->unsignedInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users');

            $table->unsignedInteger('updated_by')->nullable();
            $table->foreign('updated_by')->references('id')->on('users');

            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routines');
    }
}
