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
            $table->string('username');
            $table->text('email');
            $table->string('password');
            $table->tinyInteger('display_email')
                  ->comment('accept to display email address or not :::: 0 no , 1 yes');
            $table->string('gender');
            $table->string('nationality');
            $table->string('social_status');
            $table->integer('age');
            $table->string('country')
                  ->comment('Country where user living ');
            $table->string('city')
                  ->comment('City where user living');
            $table->string('education')
                ->comment("user's education level");
            $table->tinyInteger('accept_misyar')
                  ->comment('if user accept misyar marriage :::: 0 refuse , 1 accept');
            $table->tinyInteger('accept_polygamy')
                  ->comment('if user accept more than one   :::: 0 refuse , 1 accept');
            $table->longText('about_me')
                  ->comment('user write about him/her self');
            $table->longText('about_another')
                  ->comment('user write about another person');
            $table->longText('profession')
                ->comment("user's profession");
            $table->longText('profile_picture')
                ->comment("user's profile picture");
            $table->tinyInteger('children');
            $table->string('facebook_link');
            $table->string('twitter_link');
            $table->string('gmail_link');
            $table->string('instagram_link');
            $table->string('linkedin_link');
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
