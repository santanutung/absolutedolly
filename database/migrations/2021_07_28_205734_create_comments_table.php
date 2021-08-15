<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->integer('art_id')->unsigned()->onDelete('cascade');
            $table->integer('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('digital')->default(0);
            $table->string('physical')->default(0);
            $table->integer('is_approve')->default(0);
            $table->enum('type', ['castomer', 'admin', 'gust'])->default('gust');
            $table->integer('rating')->nullable();
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('comments');
    }
}
