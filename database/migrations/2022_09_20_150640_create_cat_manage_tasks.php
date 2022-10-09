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
        Schema::create('cat_manage_tasks', function (Blueprint $table) {
            $table->id();
            $table->string('task_name');
            $table->integer('level_two')->default('0');
            $table->integer('level_three')->default('0');
            $table->integer('level_four')->default('0');
            $table->integer('level_five')->default('0');
            $table->integer('level_six')->default('0');
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
        Schema::dropIfExists('cat_manage_tasks');
    }
};
