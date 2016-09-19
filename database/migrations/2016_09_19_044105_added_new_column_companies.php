<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddedNewColumnCompanies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->string('slogan')->after('name');
            $table->string('logo')->after('slogan');
            $table->integer('city_id')->after('logo');
            $table->text('description')->after('city_id');
            $table->integer('status_publish_id')->after('description');
            $table->integer('status_activate_id')->after('status_publish_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            //
        });
    }
}
