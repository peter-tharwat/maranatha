<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
             $table->bigIncrements();

            $table->bigIncrements('church_id');
            $table->foreign('church_id')->references('id')->on("churches")->onDelete('cascade');


            $table->string('name');
            $table->string('user_name')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone')->unique();
            $table->string('phone_ver_code')->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->string('home_phone')->nullable(); 
            $table->string('password');

            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('build_number')->nullable();
            $table->string('floor_number')->nullable();
            $table->string('flat_number')->nullable();
            $table->string('description')->nullable();
            $table->string('level')->default('user');
            
            $table->string('priest_name')->nullable();



            /*$table->bigIncrements('priest_id')->nullable();
            $table->foreign('priest_id')->references('id')->on("users")->onDelete('set null');*/
            //$table->bigIncrements('service_id')->nullable();
            //$table->foreign('service_id')->references('id')->on("services")->onDelete('set null');

            $table->timestamp('dob')->nullable();

            $table->string('job')->nullable();


            $table->boolean('approved')->default(0);

            $table->text('note')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
