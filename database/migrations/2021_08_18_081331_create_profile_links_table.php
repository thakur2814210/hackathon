<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_links', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('registrations_id');
            $table->string('useful_links')->nullable();
            $table->timestamps();
            $table->foreign('registrations_id')->references('id')->on('registrations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_links');
    }
}
