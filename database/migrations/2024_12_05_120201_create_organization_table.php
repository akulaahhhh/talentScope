<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('org_name');
            $table->string('ssm')->nullable();
            $table->enum('type',['GLC','MNC','NGO','INSTITUTION','OTHERS'])->nullable();
            $table->string('description')->nullable();
            $table->string('logo')->nullable();
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizer');
    }
};
