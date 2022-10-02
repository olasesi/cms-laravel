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
            $table->string('title', 100)->index();
            $table->string('slug');
            $table->string('category_section_id')->nullable();
            $table->text('excerpt')->nullable();
            $table->text('body')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('image')->nullable();
            $table->string('image_path')->nullable();
            $table->string('video_placeholder')->nullable();
            $table->string('video_path')->nullable();
            $table->string('publish_time');
            $table->string('discussion');
            $table->string('visibility');
            $table->string('order')->nullable();
            $table->string('recent','3')->nullable();
            $table->string('breaking_news','3')->nullable();
            $table->string('most_popular','3')->nullable();
            $table->string('favourite','3')->nullable();
            $table->string('hot_topics','3')->nullable();
            $table->string('watch_now','3')->nullable();
            $table->string('trending','3')->nullable();
            $table->string('more_news','3')->nullable();
            //$table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
