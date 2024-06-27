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
        Schema::create('s_gezin', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('code');
            $table->string('omschrijving');
            $table->integer('aantal_volwassenen');
            $table->integer('aantal_kinderen')->nullable();
            $table->integer('aantal_babys')->nullable();
            $table->integer('totaal_aantal_personen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_gezin');
    }
};
