<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealEstateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_estate_images', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('real_estate_id');
            $table->foreign('real_estate_id')->references('id')->on('real_estate')
                ->onDelete('cascade')->onUpdate('cascade');

           $table->text('image');
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
        Schema::dropIfExists('real_estate_images');
    }
}
