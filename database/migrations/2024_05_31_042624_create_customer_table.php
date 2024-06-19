<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->string('fullname',255);
            $table->string('email',100)->unique();
            $table->string('phone_number',50)->unique();
            $table->bigInteger('birthday');
            $table->string('avatar',255);
            $table->integer('active_user');
            $table->string('cmnd');
            $table->integer('otp');
            $table->string('password', 255);
            $table->integer('gender');
            $table->string('district_contact', 200);
            $table->string('district_resident', 200);
            $table->string('nationality', 200);
            $table->string('address_contact', 255);
            $table->mediumInteger('level');
            $table->string('job', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
