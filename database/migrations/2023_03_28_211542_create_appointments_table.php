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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->text('appointment_reason');
            $table->date('appointment_date');
            $table->bigInteger('appointment_number');

            $table->unsignedBigInteger('appointment_doctor_id');
            $table->foreign('appointment_doctor_id')->references('id')->on('doctors')->onDelete('cascade');

            $table->unsignedBigInteger('appointment_user_id');
            $table->foreign('appointment_user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
