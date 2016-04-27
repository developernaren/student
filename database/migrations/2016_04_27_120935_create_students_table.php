<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->index()->unsigned();
            $table->integer('course_id')->index()->unsigned();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
             $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');

             $table->boolean('is_complete');


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
        Schema::drop('students');
    }
}
