<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('question_id')->unsigned();
            $table->string('value');
            $table->integer('unit_id')->unsigned();
            $table->string('url');
            $table->boolean('approved')->default(0);
            $table->boolean('discovered')->default(0);
            $table->boolean('selected')->default(0);

            $table->foreign('question_id')->references('id')->on('questions');
            $table->foreign('unit_id')->references('id')->on('units');

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

        Schema::table('answers', function ($table)
        {
            $table->dropForeign(['question_id']);
            $table->dropForeign(['unit_id']);
        });

        Schema::drop('answers');

    }
}
