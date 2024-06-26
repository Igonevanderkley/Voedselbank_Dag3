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
        Schema::create('q_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('straat', 50);
            $table->integer('huisnummer');
            $table->string('toevoeging', 4)->nullable();
            $table->string('postcode', 6);
            $table->string('woonplaats', 20);
            $table->string('email', 50);
            $table->string('mobiel', 13);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('q_contacts');
    }
};
