@extends('admin.layout')

@section('title', 'Instellingen')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <h1 class="text-2xl font-bold mb-6">Instellingen Beheren</h1>

    <form action="{{ route('admin.updateInstellingen') }}" method="POST" class="space-y-6">
        @csrf

        <!-- Inschrijfperiode -->
        <div class="border rounded-lg p-4">
            <h2 class="text-lg font-semibold mb-4">📅 Inschrijfperiode</h2>
            
            <div class="flex items-center space-x-3">
                <input type="checkbox" 
                       id="inschrijfperiode_open" 
                       name="inschrijfperiode_open" 
                       value="1"
                       {{ $settings['inschrijfperiode_open']->typed_value ? 'checked' : '' }}
                       class="w-4 h-4 text-blue-600 rounded">
                <label for="inschrijfperiode_open" class="text-sm font-medium text-gray-700">
                    Inschrijfperiode open
                </label>
            </div>
            <p class="text-sm text-gray-500 mt-2">
                Sta studenten toe om in te schrijven voor keuzedelen
            </p>
        </div>

        <!-- Deelnemerslimieten -->
        <div class="border rounded-lg p-4">
            <h2 class="text-lg font-semibold mb-4">👥 Deelnemerslimieten</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="max_deelnemers_per_keuzedeel" class="block text-sm font-medium text-gray-700 mb-2">
                        Maximum deelnemers per keuzedeel
                    </label>
                    <input type="number" 
                           id="max_deelnemers_per_keuzedeel" 
                           name="max_deelnemers_per_keuzedeel" 
                           value="{{ $settings['max_deelnemers_per_keuzedeel']->typed_value }}"
                           min="1" 
                           max="100"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <p class="text-sm text-gray-500 mt-1">
                        Standaard limiet voor alle keuzedelen
                    </p>
                </div>

                <div>
                    <label for="min_deelnemers_grens" class="block text-sm font-medium text-gray-700 mb-2">
                        Waarschuwingsgrens
                    </label>
                    <input type="number" 
                           id="min_deelnemers_grens" 
                           name="min_deelnemers_grens" 
                           value="{{ $settings['min_deelnemers_grens']->typed_value }}"
                           min="1" 
                           max="50"
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <p class="text-sm text-gray-500 mt-1">
                        Toon waarschuwing bij minder dan dit aantal inschrijvingen
                    </p>
                </div>
            </div>
        </div>

        <!-- Systeemstatus -->
        <div class="border rounded-lg p-4">
            <h2 class="text-lg font-semibold mb-4">📊 Systeemstatus</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-blue-50 p-3 rounded">
                    <div class="text-sm text-blue-600">Totaal studenten</div>
                    <div class="text-xl font-bold text-blue-800">{{ App\Models\User::students()->active()->count() }}</div>
                </div>
                <div class="bg-green-50 p-3 rounded">
                    <div class="text-sm text-green-600">Actieve keuzedelen</div>
                    <div class="text-xl font-bold text-green-800">{{ App\Models\Keuzedeel::actief()->count() }}</div>
                </div>
                <div class="bg-purple-50 p-3 rounded">
                    <div class="text-sm text-purple-600">Totale inschrijvingen</div>
                    <div class="text-xl font-bold text-purple-800">{{ App\Models\Inschrijving::count() }}</div>
                </div>
            </div>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Instellingen opslaan
            </button>
        </div>
    </form>
</div>
@endsection
