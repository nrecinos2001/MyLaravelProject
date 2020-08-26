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
        Schema::create(
            'users', 
            function (Blueprint $table) {
                $table->id();
                $table->string('id_student');
                $table->string('name');
                $table->string('lastname');
                $table->string('email')->unique();
                $table->string('username')->unique()->nullable();
                $table->string('password');
                $table->char('gender', 1);
                $table->integer('university_id')->index();
                $table->integer('career_id')->index();
                $table->integer('faculty_id')->index();
                $table->integer('country_id')->index();
                $table->string('image')->nullable();
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
