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
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('B_ID');
            $table->string('B_Name');
            $table->string('B_Email');
            $table->string('B_Mobile');
            $table->date('B_Date');
            $table->string('B_Meal');
            $table->integer('B_People');
            $table->integer('B_Table_No');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
