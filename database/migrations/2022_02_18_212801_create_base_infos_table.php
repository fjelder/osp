<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaseInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('base_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nip', 10);
            $table->string('regon', 20);
            $table->string('krs', 20);
            $table->string('number', 20);
            $table->string('email', 100);
            $table->string('address', 100);
            $table->text('linkMaps');
            $table->text('linkFacebook')->nullable();
            $table->text('linkYoutube')->nullable();
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
        Schema::dropIfExists('base_infos');
    }
}
