<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('section_category', function (Blueprint $table) {
    $table->unsignedInteger('section_id');
    $table->unsignedInteger('category_id');
    $table->primary(['section_id','category_id']);

    // 外部キー制約
    $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
    $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('section_category');
    }
}
