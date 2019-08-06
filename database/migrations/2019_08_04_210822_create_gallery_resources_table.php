<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_resources', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('gallery_id');
            $table->unsignedInteger('type_id');
            //@todo add gallery resource type model
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('uri');
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
        Schema::dropIfExists('gallery_resources');
    }
}
