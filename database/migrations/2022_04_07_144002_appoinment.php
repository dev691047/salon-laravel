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
         Schema::create('appoinments', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');

            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('date')->nullable();
            $table->string('comment')->nullable();
            $table->string('status')->nullable();
            $table->string('user_id')->nullable();
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
        //
    }
};
