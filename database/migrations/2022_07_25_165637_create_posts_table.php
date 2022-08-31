<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 30);
            $table->string('slug')->index();
            $table->unsignedBigInteger('category_section_id');
            $table->text('excerpt')->nullable();
            $table->text('body')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('image')->nullable();
            $table->string('image_path')->nullable();
            $table->string('video')->nullable();
            $table->string('video_path')->nullable();
            $table->string('publish_time');
            $table->string('discussion');
            $table->string('visibility');
            $table->string('order')->nullable();
            $table->string('recent')->nullable();
            $table->string('breaking_news')->nullable();
            $table->string('most_popular')->nullable();
            $table->string('favourite')->nullable();
            $table->string('hot_topics')->nullable();
            $table->string('watch_now')->nullable();
            $table->string('trending')->nullable();
            $table->string('more_news')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            //$table->foreign('category_section_id')->references('id')->on('category_sections')->onUpdate('cascade')->onDelete('cascade'); //This should also be constrained 
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
        Schema::dropIfExists('posts');
    }
}
