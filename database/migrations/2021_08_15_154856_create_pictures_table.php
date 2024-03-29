<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictures', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('mime_type')->nullable();
            $table->string('alt')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();

            $table->bigInteger('user_id')->unsigned()->length(20);
            $table->foreign('user_id')->references('id')->on('users');

            $table->bigInteger('vehicle_id')->unsigned()->length(20);
            $table->foreign('vehicle_id')->references('id')->on('vehicles');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pictures');
    }
}
