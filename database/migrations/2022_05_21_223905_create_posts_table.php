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
            $table->integer('post_category');
            $table->integer('post_author');
            $table->enum('post_status', ['Published', 'Unpublished'])->nullable();
            $table->string('post_caption', 255)->nullable();
            
            $table->text('post')->nullable();
            $table->enum('post_section', ['Recent', 'Favourite', 'Most Popular', 'Hot Topics', 'Now Watching', 'Trending' ]);
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
