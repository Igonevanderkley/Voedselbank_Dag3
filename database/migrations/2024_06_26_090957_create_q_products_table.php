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
            $table->string('naam', 50);
            $table->string('soort_allergie', 20);
            $table->string('barcode', 15);
            $table->date('houdbaarheidsdatum');
            $table->string('omschrijving', 50);
            $table->string('status', 20);
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
