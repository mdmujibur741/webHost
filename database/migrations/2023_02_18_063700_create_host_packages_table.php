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
        Schema::create('host_packages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->float('price', 8,2);
            $table->integer('priority');
            $table->longText('description');
            $table->string('icon_class');
            $table->string('opportunityOne')->nullable();
            $table->string('opportunityTwo')->nullable();
            $table->string('opportunityThree')->nullable();
            $table->string('opportunityFour')->nullable();
            $table->string('opportunityFive')->nullable();
            $table->string('opportunitySix')->nullable();
            $table->string('opportunitySeven')->nullable();
            $table->string('opportunityEight')->nullable();
            $table->string('opportunityNine')->nullable();
            $table->string('opportunityTen')->nullable();
            $table->string('opportunityEleven')->nullable();
            $table->string('opportunityTwelve')->nullable();
            $table->foreignId('hostCategory_id')->constrained('host_categories')->cascadeOnDelete();
            $table->foreignId('plan_id')->constrained('plans')->cascadeOnDelete();
            $table->foreignId('duration_id')->constrained('durations')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->softDeletes();
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
        Schema::dropIfExists('host_packages');
    }
};
