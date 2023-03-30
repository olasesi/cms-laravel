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
            $table->text('excerpt')->nullable();
            $table->text('body')->nullable();
            $table->string('image')->nullable();
            $table->text('tags')->nullable();
            $table->string('image_path')->nullable();
            $table->string('video_placeholder')->nullable();
            $table->string('video_path')->nullable();
            $table->dateTime('publish_time')->nullable();
            $table->string('pending_preview')->nullable();
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
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->unsignedBigInteger('section_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable(); //To replace this with contrained like that above if possible    $table->foreignId('category_section_id')->constrained('category_section');
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
