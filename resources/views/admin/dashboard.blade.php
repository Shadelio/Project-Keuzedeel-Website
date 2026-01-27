@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <h1 class="text-2xl font-bold mb-6">Admin Dashboard</h1>
    
    <!-- Statistieken -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
        <div class="bg-blue-50 p-4 rounded-lg">
            <h3 class="text-lg font-semibold text-blue-800">Studenten</h3>
            <p class="text-3xl font-bold text-blue-600">{{ $stats['totaal_studenten'] }}</p>
            <p class="text-sm text-blue-600">Totaal actieve studenten</p>
        </div>
        
        <div class="bg-green-50 p-4 rounded-lg">
            <h3 class="text-lg font-semibold text-green-800">Keuzedelen</h3>
            <p class="text-3xl font-bold text-green-600">{{ $stats['actieve_keuzedelen'] }} / {{ $stats['totaal_keuzedelen'] }}</p>
            <p class="text-sm text-green-600">Actief / Totaal</p>
        </div>
        
        <div class="bg-purple-50 p-4 rounded-lg">
            <h3 class="text-lg font-semibold text-purple-800">Inschrijvingen</h3>
            <p class="text-3xl font-bold text-purple-600">{{ $stats['geaccepteerde_inschrijvingen'] }}</p>
            <p class="text-sm text-purple-600">Geaccepteerd ({{ $stats['wachtende_inschrijvingen'] }} wachtend)</p>
        </div>
    </div>

    <!-- Waarschuwingen -->
    @if($keuzedelen_weinig_inschrijvingen->count() > 0)
        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 mb-6">
            <h3 class="text-lg font-semibold text-yellow-800 mb-2">⚠️ Keuzedelen met weinig inschrijvingen</h3>
            <p class="text-sm text-yellow-700 mb-3">De volgende keuzedelen hebben minder dan {{ Setting::get('min_deelnemers_grens', 15) }} inschrijvingen:</p>
            <ul class="space-y-1">
                @foreach($keuzedelen_weinig_inschrijvingen as $keuzedeel)
                    <li class="text-sm text-yellow-700">
                        • {{ $keuzedeel->titel }} - {{ $keuzedeel->inschrijvingen_count }} inschrijvingen
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    @if($volle_keuzedelen->count() > 0)
        <div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-6">
            <h3 class="text-lg font-semibold text-red-800 mb-2">🔴 Volle keuzedelen</h3>
            <p class="text-sm text-red-700 mb-3">De volgende keuzedelen zijn vol:</p>
            <ul class="space-y-1">
                @foreach($volle_keuzedelen as $keuzedeel)
                    <li class="text-sm text-red-700">
                        • {{ $keuzedeel->titel }} - {{ $keuzedeel->huidige_deelnemers }} / {{ $keuzedeel->max_deelnemers }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Recente inschrijvingen -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-bold mb-4">Recente inschrijvingen</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Student</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Keuzedeel</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Status</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Datum</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recente_inschrijvingen as $inschrijving)
                        <tr class="border-b">
                            <td class="px-4 py-2 text-sm">{{ $inschrijving->user->name }}</td>
                            <td class="px-4 py-2 text-sm">{{ $inschrijving->keuzedeel->titel }}</td>
                            <td class="px-4 py-2 text-sm">
                                <span class="px-2 py-1 rounded text-xs {{ $inschrijving->status === 'geaccepteerd' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                    {{ $inschrijving->status }}
                                </span>
                            </td>
                            <td class="px-4 py-2 text-sm">{{ $inschrijving->created_at->format('d-m-Y H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
