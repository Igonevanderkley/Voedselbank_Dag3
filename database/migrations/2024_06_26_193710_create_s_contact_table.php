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
        Schema::create('s_contact', function (Blueprint $table) {
            $table->id();
            $table->string('straat');
            $table->integer('huisnummer');
            $table->string('toevoeging')->nullable();
            $table->string('postcode');
            $table->string('woonplaats');
            $table->string('email');
            $table->string('mobiel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_contact');
    }
};
