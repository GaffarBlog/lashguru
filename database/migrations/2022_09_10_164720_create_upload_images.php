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
        Schema::create('upload_images', function (Blueprint $table) {
            $table->id();
            $table->string('filename');
            $table->string('tumb');
            $table->string('keywords');
            $table->string('2400x1440')->default('0');
            $table->string('2400x1000')->default('0');
            $table->string('2400x750')->default('0');
            $table->string('2400x500')->default('0');
            $table->string('600x600')->default('0');
            $table->string('450x600')->default('0');
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
        Schema::dropIfExists('upload_images');
    }
};
