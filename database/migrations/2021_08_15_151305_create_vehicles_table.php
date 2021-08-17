<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            
            $table->string('model');
            $table->string('mileage');
            $table->string('color');

            $table->enum('condition', ['Used', 'New']);
            $table->enum('category', ['Mini Vans', 'Luxury Vehicles', 'Sports/Performance Cars', 'SUVs/Off-road Vehicles', 'Electric & Hybrid']);
            $table->enum('fuel_type', ['Gasoline', 'Diesel', 'Liquefied Petroleum', 'Bio Diesel', 'Ethanol']);
            $table->enum('type', ['rent', 'buy']);

            $table->date('kteo');
            $table->date('year');

            $table->integer('engine');
            $table->integer('doors');
            $table->integer('seats');

            $table->double('price');
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
        Schema::dropIfExists('vehicles');
    }
}
