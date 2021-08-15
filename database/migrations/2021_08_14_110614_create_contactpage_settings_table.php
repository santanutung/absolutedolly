<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactpageSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactpage_settings', function (Blueprint $table) {
            $table->id();
            $table->text('about_tittle')->nullable();
            $table->text('about_text')->nullable();
            $table->text('contact_tittle')->nullable();
            $table->text('contact_text')->nullable();
            $table->text('contact_address')->nullable();
            $table->text('contact_phone_1')->nullable();
            $table->text('contact_phone_2')->nullable();
            $table->text('contact_email_1')->nullable();
            $table->text('contact_email_2')->nullable();
            $table->text('contact_button_text')->nullable();
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
        Schema::dropIfExists('contactpage_settings');
    }
}
