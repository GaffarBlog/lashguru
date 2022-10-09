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
        Schema::create('svg_main_contents', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('sub_cat_manage_svg_file_id');
            $table->string('main_file_one')->nullable();
            $table->string('main_file_two')->nullable();
            $table->string('main_file_three')->nullable();
            $table->string('main_file_four')->nullable();
            $table->string('extension_one')->nullable();
            $table->string('extension_two')->nullable();
            $table->string('extension_three')->nullable();
            $table->string('extension_four')->nullable();
            $table->string('extension_five')->nullable();
            $table->string('extension_six')->nullable();
            $table->string('extension_seven')->nullable();
            $table->string('extension_eight')->nullable();
            $table->string('extension_nine')->nullable();
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
        Schema::dropIfExists('svg_main_contents');
    }
};
