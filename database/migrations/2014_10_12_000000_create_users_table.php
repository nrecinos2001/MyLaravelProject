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
                $table->string('id_student')->index()->nullable();
                $table->string('name');
                $table->string('lastname')->nullable();
                $table->string('email')->unique();
                $table->string('username')->unique()->nullable();
                $table->string('password')->nullable();
                $table->char('gender', 1)->nullable();
                $table->integer('university_id')->index()->nullable();
                $table->integer('career_id')->index()->nullable();
                $table->integer('faculty_id')->index()->nullable();
                $table->integer('country_id')->index()->nullable();
                $table->char('isadmin')->nullable();
                $table->string('image')->nullable();
                $table->float('userCUM',4, 2)->nullable();
                $table->integer('subjectsDone')->nullable();
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
