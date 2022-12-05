<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('active')->default(1);
            $table->enum('role', ['super admin', 'editor', 'contributor', 'author', 'subscriber'])->default('contributor');
            $table->string('name', 30);
            $table->string('email')->unique();
            $table->string('username', 30)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('google_plus')->nullable();
            $table->string('linkedin')->nullable();
            $table->text('bio')->nullable();
            $table->string('user_image')->nullable();
            $table->string('user_image_path')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
