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
        Schema::create('appointmentmodels', function (Blueprint $table) {
            $table->id();
            $table->string('Full_name');
            $table->string('Email');
            $table->string('Date');
            $table->string('Time');
            $table->string('Phone');
            $table->string('Drivers');
            $table->string('Address');
            $table->string('Condition');
            $table->string('Status')->default('Pending');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointmentmodels');
    }
};
