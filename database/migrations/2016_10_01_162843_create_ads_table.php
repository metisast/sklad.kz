<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('industry_id');
            $table->text('description');
            $table->string('price');
            $table->integer('city_id');
            $table->string('main_image');
            $table->string('user_name');
            $table->string('email');
            $table->string('phone');
            $table->tinyInteger('status_publish_id');
            $table->tinyInteger('status_active_id');
            $table->tinyInteger('status_belong_id');
            $table->timestamp('ended');
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
        Schema::drop('ads');
    }
}
