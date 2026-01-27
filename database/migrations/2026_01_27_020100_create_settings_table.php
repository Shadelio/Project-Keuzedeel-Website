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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->string('type')->default('string'); // string, boolean, integer
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // Insert default settings
        DB::table('settings')->insert([
            [
                'key' => 'inschrijfperiode_open',
                'value' => 'false',
                'type' => 'boolean',
                'description' => 'Of de inschrijfperiode open is',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'max_deelnemers_per_keuzedeel',
                'value' => '30',
                'type' => 'integer',
                'description' => 'Maximum aantal deelnemers per keuzedeel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'min_deelnemers_grens',
                'value' => '15',
                'type' => 'integer',
                'description' => 'Minimum aantal deelnemers voordat keuzedeel waarschuwing toont',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
