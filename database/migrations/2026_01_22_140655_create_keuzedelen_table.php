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
        Schema::create('keuzedelen', function (Blueprint $table) {
            $table->id();
            $table->string('titel');
            $table->text('beschrijving');
            $table->string('code')->unique();
            $table->integer('ec')->default(0); // European Credits
            $table->enum('niveau', ['KB', 'K1', 'K2', 'K3', 'K4']);
            $table->enum('status', ['beschikbaar', 'vol', 'niet_beschikbaar'])->default('beschikbaar');
            $table->integer('max_deelnemers')->nullable();
            $table->integer('huidige_deelnemers')->default(0);
            $table->date('startdatum');
            $table->date('einddatum');
            $table->string('docent');
            $table->string('locatie');
            $table->text('voorwaarden')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keuzedelen');
    }
};
