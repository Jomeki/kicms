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
        Schema::create('app_users', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('sname');
            $table->string('lname');
            $table->string('full');
            $table->date('dob');
            $table->string('phone_number')->unique();
            $table->timestamp('phonenumber_verified');
            $table->string('role_id')->default(1);
            $table->unsignedBigInteger('territory_id');
            $table->foreign('territory_id')->references('id')->on('territories');
            $table->boolean('is_activated')->default(false);
            $table->string('password');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_users');
    }
};
