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
        Schema::create('sub_cat_manage_svg_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('cat_manage_svg_file_id')->default(0);
            $table->string('title')->nullable();
            $table->unsignedInteger('width_in_px')->default(0);
            $table->unsignedInteger('height_in_px')->default(0);
            $table->string('content_type', 20)->nullable();
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
        Schema::dropIfExists('sub_cat_manage_svg_files');
    }
};
