<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->unsignedInteger('account_id');
            $table->string('description')->comment('Written location reference, address and whatnot');
            $table->string('coordinates')->comment('Coordinates, geo location reference');
            $table->integer('work_radius')->comment('in Kilometers')->default(25);
            $table->integer('travel_radius')->comment('in Kilometers')->nullable();
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
        Schema::dropIfExists('locations');
    }
}
