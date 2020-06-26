<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements();
            $table->bigIncrements('church_id');
            $table->foreign('church_id')->references('id')->on("churches")->onDelete('cascade');
            $table->bigIncrements('user_id');
            $table->foreign('user_id')->references('id')->on("users")->onDelete('cascade');
            $table->bigIncrements('mass_id');
            $table->foreign('mass_id')->references('id')->on("masses")->onDelete('cascade');

            $table->timestamp('approved_at');
            
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
        Schema::dropIfExists('reservations');
    }
}
