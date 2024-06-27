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
        Schema::create('persoon', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gezin_id')->nullable(); 
            $table->foreign('gezin_id')->references('id')->on('gezin');
            $table->string('voornaam');
            $table->string('tussenvoegsel')->nullable();
            $table->string('achternaam');
            $table->date('geboortedatum');
            $table->string('type_persoon');
            $table->boolean('is_vertegenwoordiger');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persoon');
    }
};
