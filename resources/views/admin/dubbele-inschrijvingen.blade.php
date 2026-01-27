@extends('admin.layout')

@section('title', 'Dubbele Inschrijvingen')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <h1 class="text-2xl font-bold mb-6">⚠️ Dubbele Inschrijvingen</h1>
    
    <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4 mb-6">
        <p class="text-sm text-yellow-800">
            <strong>Let op:</strong> Dit toont studenten die voor meerdere keuzedelen zijn ingeschreven die mogelijk overlappen in periode.
            Controleer de data om conflicten te identificeren.
        </p>
    </div>

    @if($dubbele_inschrijvingen->count() > 0)
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Student</th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Email</th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Keuzedeel 1</th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Periode 1</th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Keuzedeel 2</th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Periode 2</th>
                        <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Conflict</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dubbele_inschrijvingen as $inschrijving)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3 font-medium">{{ $inschrijving->student_naam }}</td>
                            <td class="px-4 py-3 text-sm text-gray-600">{{ $inschrijving->student_email }}</td>
                            <td class="px-4 py-3">
                                <div class="font-medium text-sm">{{ $inschrijving->keuzedeel1 }}</div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                @if($inschrijving->startdatum1 && $inschrijving->einddatum1)
                                    <div>{{ $inschrijving->startdatum1 }} t/m {{ $inschrijving->einddatum1 }}</div>
                                @else
                                    <div class="text-gray-500">Onbekend</div>
                                @endif
                            </td>
                            <td class="px-4 py-3">
                                <div class="font-medium text-sm">{{ $inschrijving->keuzedeel2 }}</div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                @if($inschrijving->startdatum2 && $inschrijving->einddatum2)
                                    <div>{{ $inschrijving->startdatum2 }} t/m {{ $inschrijving->einddatum2 }}</div>
                                @else
                                    <div class="text-gray-500">Onbekend</div>
                                @endif
                            </td>
                            <td class="px-4 py-3">
                                <?php
                                $conflict = false;
                                if ($inschrijving->startdatum1 && $inschrijving->einddatum1 && 
                                    $inschrijving->startdatum2 && $inschrijving->einddatum2) {
                                    $start1 = new \DateTime($inschrijving->startdatum1);
                                    $eind1 = new \DateTime($inschrijving->einddatum1);
                                    $start2 = new \DateTime($inschrijving->startdatum2);
                                    $eind2 = new \DateTime($inschrijving->einddatum2);
                                    
                                    $conflict = ($start1 <= $eind2 && $start2 <= $eind1);
                                }
                                ?>
                                @if($conflict)
                                    <span class="px-2 py-1 bg-red-100 text-red-800 rounded text-xs">Ja</span>
                                @else
                                    <span class="px-2 py-1 bg-green-100 text-green-800 rounded text-xs">Nee</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="bg-green-50 border border-green-200 rounded-lg p-6 text-center">
            <div class="text-green-800">
                <svg class="w-12 h-12 mx-auto mb-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3 class="text-lg font-medium mb-2">Geen dubbele inschrijvingen gevonden</h3>
                <p class="text-sm">Alle studenten hebben geen overlappende keuzedelen.</p>
            </div>
        </div>
    @endif
</div>
@endsection
