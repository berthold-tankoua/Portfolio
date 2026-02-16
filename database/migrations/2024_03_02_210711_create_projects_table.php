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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('category_id');
            $table->string('tools',1000);
            $table->string('name')->nullable();
            $table->string('sub')->nullable();
            $table->string('ytb_link')->nullable();
            $table->string('slug')->nullable();
            $table->string('img_perf')->nullable();
            $table->string('img_perf_url')->nullable();
            $table->string('title1')->nullable();
            $table->text('desc1')->nullable();
            $table->string('image1')->nullable();
            $table->string('img_url1')->nullable();
            $table->string('title2')->nullable();
            $table->text('desc2')->nullable();
            $table->string('image2')->nullable();
            $table->string('img_url2')->nullable();
            $table->string('title3')->nullable();
            $table->text('desc3')->nullable();
            $table->string('image3')->nullable();
            $table->string('img_url3')->nullable();
            $table->string('title4')->nullable();
            $table->text('desc4')->nullable();
            $table->string('image4')->nullable();
            $table->string('img_url4')->nullable();
            $table->string('url')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('client_contact')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
