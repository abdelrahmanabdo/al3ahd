<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generalSettings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone_number');
            $table->string('email');
            $table->string('address');
            $table->string('logo');
            $table->string('facebook_link');
            $table->string('twitter_link');
            $table->string('gmail_link');
            $table->string('vim_link');
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
        Schema::dropIfExists('generalSettings');
    }
}
