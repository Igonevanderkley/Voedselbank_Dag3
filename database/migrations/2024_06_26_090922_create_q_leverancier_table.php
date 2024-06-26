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
        Schema::create('leverancier_q_s', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('contact_persoon');
            $table->string('leverancier_nummer');
            $table->string('leverancier_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leverancier_q_s');
    }
};
