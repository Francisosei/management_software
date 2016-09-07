<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFellowshipProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fellowship_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fellowship_id')->unsignned()->nullable();
            $table->foreign('followship_id')->references('id')->on('fellowship');

            $table->integer('profiles_id')->unsignned()->nulllable();
            $table->foreign('profiles_id')->references('id')->on('profiles');
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
        Schema::drop('fellowship_profiles');
    }
}
