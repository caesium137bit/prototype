<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('quizzes', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('section_id');
           $table->integer('order');
           $table->string('image_src');      
           $table->string('correct');          
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
        Schema::dropIfExists('quizzes');
    }
}
