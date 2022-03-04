<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('position', 50);
            $table->string('phone', 50)->nullable();
            $table->string('profilePhotoPath', 2048)->nullable();
            $table->tinyText('socialFacebook')->nullable();
            $table->tinyText('socialTwitter')->nullable();
            $table->tinyText('socialInstagram')->nullable();
            $table->tinyText('socialYoutube')->nullable();
            $table->smallInteger('order')->unique();
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
        Schema::dropIfExists('management');
    }
}