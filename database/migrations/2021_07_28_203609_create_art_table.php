<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('art', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('art_id')->default(0);
            $table->string('item_id')->default(0);
            $table->string('main_images')->default(0);
            $table->text('extra_images')->default(0);


            $table->text('description');
            $table->integer('digital')->default(0);
            $table->integer('physical')->default(0);
            $table->text('digital_instructions')->nullable();
            $table->text('physical_instructions')->nullable();

            $table->string('digital_art_price')->default(0);
            $table->string('digital_art_dis')->default(0);
            $table->string('digital_art_sell')->default(0);

            $table->string('physical_art_price')->default(0);
            $table->string('physical_art_dis')->default(0);
            $table->string('physical_art_sell')->default(0);

            $table->string('physical_art_delivery_time')->default(0);
            $table->string('size_digital')->default(0);
            $table->string('size_physical')->default(0);

            $table->string('frame_color')->nullable();
            $table->string('materia_used_painting')->default(0);

            $table->string('deleted')->default(0);

            // Physical art price

            // Physical are delivery time
            // size of digital
            // Fame color
            // material we used in painting
            // Discount in percentage

            // Physical art price

            // physical_art_delivery_time
            // size_digital
            // fame_color
            // materia_used_painting
            // discount_in_percentage


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
        Schema::dropIfExists('art');
    }
}
