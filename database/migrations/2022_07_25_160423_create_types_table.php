<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            
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
        Schema::dropIfExists('types');
    }
}

// $table->string('post')->nullable();
            // $table->string('blog')->nullable();
            // $table->string('article')->nullable();
            // $table->string('featured')->nullable();
            // $table->string('recent')->nullable();
            // $table->string('favourite')->nullable();
            // $table->string('most_popular')->nullable();
            // $table->string('hot_topic')->nullable();
            // $table->string('category1')->nullable();
            // $table->string('category2')->nullable();
            // $table->string('category3')->nullable();
            // $table->string('category4')->nullable();
            // $table->string('category5')->nullable();
            // $table->string('more_news')->nullable();
            // $table->string('breaking_news')->nullable();
            // $table->string('video')->nullable();
            // $table->string('watch_now')->nullable();
            // $table->string('uncategorized')->nullable();