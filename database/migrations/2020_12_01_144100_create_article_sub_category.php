<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleSubCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->string('article_sub_category_type');
            $table->unsignedBigInteger('article_sub_category_id')->unique();
            $table->unsignedBigInteger('sub_category_id');
            $table->timestamps();
           // $table->unique(['sub_category_id', 'article_sub_category_id']);
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->cascadeOnDelete();
            $table->foreign('article_sub_category_id')->references('id')->on('articles')->cascadeOnDelete();
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_sub_category');
    }
}
