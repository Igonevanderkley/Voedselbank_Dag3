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
        Schema::create('q_contact_per_leverancier', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger ('leverancier_id');
            $table->unsignedBigInteger ('contact_id');
            $table->timestamps();

            $table->foreign('leverancier_id')->references('id')->on('q_leverancier');
            $table->foreign('contact_id')->references('id')->on('q_contacts');        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('q_contact_per_leverancier');
    }
};
