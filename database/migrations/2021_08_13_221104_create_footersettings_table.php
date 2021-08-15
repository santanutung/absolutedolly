<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footersettings', function (Blueprint $table) {
            $table->id();
            $table->text('footer_one_tittle')->nullable();
            $table->text('footer_one_email')->nullable();
            $table->text('footer_one_phone')->nullable();
            $table->text('footer_one_tittle_2')->nullable();
            $table->text('footer_two_tittle')->nullable();
            $table->text('footer_three_tittle')->nullable();
            $table->text('footer_three_text')->nullable();
            $table->text('footer_copyright')->nullable();
            $table->text('social_icon_1')->nullable();
            $table->text('social_icon_link_1')->nullable();
            $table->text('social_icon_2')->nullable();
            $table->text('social_icon_link_2')->nullable();
            $table->text('social_icon_3')->nullable();
            $table->text('social_icon_link_3')->nullable();
            $table->text('social_icon_4')->nullable();
            $table->text('social_icon_link_4')->nullable();
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
        Schema::dropIfExists('footersettings');
    }
}
