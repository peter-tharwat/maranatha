<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masses', function (Blueprint $table) {
            $table->bigIncrements();
            $table->bigIncrements('church_id');
            $table->foreign('church_id')->references('id')->on("churches")->onDelete('cascade');

            $table->string('name');
            $table->string('priest')->nullable();
            $table->integer('total_available')->nullable();
            $table->string('place')->nullable();
            $table->timestamp('starts_at')->nullable();
            $table->timestamp('ends_at')->nullable(); 
            $table->timestamp('accept_reservations_to')->nullable(); 
            $table->text('describtion')->nullable();
            $table->boolean('available')->nullable();

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
        Schema::dropIfExists('masses');
    }
}
