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
        Schema::create('q_leverancier', function (Blueprint $table) {
            $table->id();
            $table->string('naam', 255);
            $table->string('contact_persoon', 255);
            $table->string('leverancier_nummer', 10);
            $table->string('leverancier_type', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('q_leverancier');
    }
};
