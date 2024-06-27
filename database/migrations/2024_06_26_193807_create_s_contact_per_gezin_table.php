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
        Schema::create('s_contact_per_gezin', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gezin_id')->constrained('s_gezin')->onDelete('cascade');
            $table->foreignId('contact_id')->constrained('s_contact')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_contact_per_gezin');
    }
};
