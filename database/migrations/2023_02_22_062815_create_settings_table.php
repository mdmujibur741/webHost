<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('mobile')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('home_feature_title')->nullable();
            $table->text('home_feature_description')->nullable();
            $table->string('home_package_title')->nullable();
            $table->text('home_package_description')->nullable();
            $table->string('home_premium_title')->nullable();
            $table->text('home_premium_description')->nullable();
            $table->string('home_premium_image')->nullable();
            $table->string('footer_img_one')->nullable();
            $table->string('footer_img_two')->nullable();
            $table->string('footer_img_three')->nullable();
            $table->string('footer_img_four')->nullable();
            $table->string('powered')->nullable();
            $table->longText('about')->nullable();
            $table->longText('use_link')->nullable();
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
        Schema::dropIfExists('settings');
    }
};
