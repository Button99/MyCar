<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessories', function (Blueprint $table) {
            $table->id();
            $table->boolean('A/C');
            $table->boolean('CD Player');
            $table->boolean('ABS');
            $table->boolean('ESP');
            $table->boolean('ACC');
            $table->boolean('Electric Seats');
            $table->boolean('Electric Windows');
            $table->boolean('Turbo');
            $table->boolean('Lane Assist');
            $table->boolean('Keyless');
            $table->boolean('GPS');
            $table->boolean('TV/Camera');
            $table->boolean('Start/Stop');
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
        Schema::dropIfExists('accessories');
    }
}
