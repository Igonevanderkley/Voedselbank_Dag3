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
        Schema::create('contact_per_leverancier_q_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger ('leverancier_id');
            $table->unsignedBigInteger ('contact_id');
            $table->timestamps();

            $table->foreign('leverancier_id')->references('idd')->on('leverancier_q_s');
            $table->foreign('contact_id')->references('id')->on('contacts_q_s');        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_per_leverancier_q_s');
    }
};
