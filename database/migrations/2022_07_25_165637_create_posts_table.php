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
            $table->string('title', 50);
            $table->string('slug')->index();
            $table->string('category');
            $table->string('tag');
            $table->text('body');
            $table->integer('author');
            $table->string('published', 1);
            $table->string('recent', 1);
            $table->string('breaking news', 1);
            $table->string('most popular', 1);
            $table->string('favourite', 1);
            $table->string('hot topics', 1);
            $table->string('watch now', 1);
            $table->string('trending', 1);
            $table->string('more news', 1);
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
