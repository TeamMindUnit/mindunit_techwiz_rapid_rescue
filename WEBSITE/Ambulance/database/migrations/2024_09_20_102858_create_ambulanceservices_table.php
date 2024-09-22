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
        Schema::create('ambulanceservices', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Ambulanceno');
            $table->string('Hospitalname');
            $table->string('Phone');
            $table->string('Drivername');
            $table->string('Profile');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ambulanceservices');
    }
};
