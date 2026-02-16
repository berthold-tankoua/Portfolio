<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('about_img')->nullable();
            $table->string('img_url')->nullable();
            $table->string('title1')->nullable();
            $table->text('desc1')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->integer('exp_count')->nullable();
            $table->integer('proj_count')->nullable();
            $table->integer('hcust_count')->nullable();
            $table->integer('ucust_count')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('linkeldin_link')->nullable();
            $table->string('gitlab_link')->nullable();
            $table->string('adress')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
