<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('marriage_status');
            $table->string('groups');
            $table->string('fellowship');

            $table->string('residential_address');
            $table->string('home_town');
            $table->string('NOK');
            $table->string('profession');
            $table->string('health_status');

            //$table->string('Blood_Group');
            $table->string('image');
            $table->string('baptism_status');
            
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
        Schema::drop('profiles');
    }
}
