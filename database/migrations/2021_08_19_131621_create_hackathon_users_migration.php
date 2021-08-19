<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHackathonUsersMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hackathon_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hackathon_id');
            $table->unsignedBigInteger('registration_id');
            $table->foreign('hackathon_id')->references('id')->on('hackathons');
            $table->foreign('registration_id')->references('id')->on('registrations');
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
        Schema::dropIfExists('hackathon_users_migration');
    }
}
