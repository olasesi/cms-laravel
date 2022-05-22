<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->boolean('admin')->nullable();
            $table->enum('role', ['Super-admin','Administrator', 'Editor', 'Contributor'])->default('user');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('username', 30)->unique();
            $table->string('email')->unique();
            $table->string('email_confirm')->default(0);
            $table->string('password');
            $table->string('profile_photo_path', 2048)->nullable();
            $table->rememberToken()->nullable();
            $table->string('session_id', 255)->nullable();
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
        Schema::dropIfExists('admins');
    }
}
