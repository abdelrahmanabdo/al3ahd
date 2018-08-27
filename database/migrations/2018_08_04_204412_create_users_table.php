<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('username')->nullable();
            $table->text('email')->nullable();
            $table->string('password')->nullable();
            $table->tinyInteger('display_email')
                  ->comment('accept to display email address or not :::: 0 no , 1 yes')->nullable();
            $table->string('gender')->nullable();
            $table->string('nationality')->nullable();
            $table->string('social_status')->nullable();
            $table->integer('age')->nullable();
            $table->string('country')
                  ->comment('Country where user living ')->nullable();
            $table->string('city')
                  ->comment('City where user living')->nullable();
            $table->string('education')
                ->comment("user's education level")->nullable();
            $table->tinyInteger('accept_misyar')
                  ->comment('if user accept misyar marriage :::: 0 refuse , 1 accept')->nullable();
            $table->tinyInteger('accept_polygamy')
                  ->comment('if user accept more than one   :::: 0 refuse , 1 accept')->nullable();
            $table->longText('about_me')
                  ->comment('user write about him/her self')->nullable();
            $table->longText('about_another')
                  ->comment('user write about another person')->nullable();
            $table->longText('profession')
                ->comment("user's profession")->nullable();
            $table->longText('profile_picture')
                ->comment("user's profile picture")->nullable();
            $table->tinyInteger('children')->nullable();
            $table->tinyInteger('isAdmin')->default(0)->comment('true 1 , false 0');
            $table->tinyInteger('isBlocked')->default(0)->comment('true 1 , false 0');
            $table->string('membership_type')->default('normal')->comment('normal , special');
            $table->string('facebook_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('gmail_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('remember_token')->nullable();
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
