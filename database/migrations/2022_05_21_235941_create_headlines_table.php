<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headlines', function (Blueprint $table) {
            $table->id();
            
            
            $table->enum('headline_status', ['Published', 'Unpublished'])->nullable();
            $table->string('headline_caption', 255)->nullable();
            
            $table->text('headline')->nullable();
            $table->enum('headline_section', ['Main', 'Business', 'Sport', 'Entertainment' ]);
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
        Schema::dropIfExists('headlines');
    }
}
