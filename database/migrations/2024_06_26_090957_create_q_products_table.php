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
        Schema::create('q_products', function (Blueprint $table) {
            $table->id();
            $table->integer('categorie_id')->nullable();
            $table->string('naam');
            $table->string('soort_allergie');
            $table->string('barcode');
            $table->date('houdbaarheidsdatum');
            $table->string('omschrijving');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('q_products');
    }
};
