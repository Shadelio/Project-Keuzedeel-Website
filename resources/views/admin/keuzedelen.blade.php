@extends('admin.layout')

@section('title', 'Keuzedelen Beheren')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Keuzedelen Beheren</h1>
        <a href="{{ route('keuzedelen') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Naar keuzedelen pagina
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Titel</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Code</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">EC</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Docent</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Inschrijvingen</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Status</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Actief</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Acties</th>
                </tr>
            </thead>
            <tbody>
                @foreach($keuzedelen as $keuzedeel)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3">
                            <div>
                                <div class="font-medium">{{ $keuzedeel->titel }}</div>
                                <div class="text-sm text-gray-500">{{ $keuzedeel->niveau }}</div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-sm">{{ $keuzedeel->code }}</td>
                        <td class="px-4 py-3 text-sm">{{ $keuzedeel->ec }}</td>
                        <td class="px-4 py-3 text-sm">{{ $keuzedeel->docent }}</td>
                        <td class="px-4 py-3">
                            <div class="text-sm">
                                <span class="{{ $keuzedeel->inschrijvingen_count >= $keuzedeel->max_deelnemers ? 'text-red-600 font-bold' : 'text-gray-700' }}">
                                    {{ $keuzedeel->inschrijvingen_count }} / {{ $keuzedeel->max_deelnemers }}
                                </span>
                                @if($keuzedeel->heeftTeWeinigInschrijvingen())
                                    <span class="text-yellow-600 text-xs ml-2">⚠️</span>
                                @endif
                            </div>
                        </td>
                        <td class="px-4 py-3">
                            <span class="px-2 py-1 rounded text-xs {{ 
                                $keuzedeel->status === 'beschikbaar' ? 'bg-green-100 text-green-800' : 
                                ($keuzedeel->status === 'niet_beschikbaar' ? 'bg-red-100 text-red-800' : 
                                'bg-gray-100 text-gray-800') 
                            }}">
                                {{ $keuzedeel->status }}
                            </span>
                        </td>
                        <td class="px-4 py-3">
                            <form action="{{ route('admin.toggleKeuzedeel', $keuzedeel->id) }}" method="POST">
                                @csrf
                                <button type="submit" 
                                        class="px-3 py-1 rounded text-xs {{ 
                                            $keuzedeel->is_active ? 'bg-green-100 text-green-800 hover:bg-green-200' : 
                                            'bg-red-100 text-red-800 hover:bg-red-200' 
                                        }}">
                                    {{ $keuzedeel->is_active ? '✓ Actief' : '✗ Inactief' }}
                                </button>
                            </form>
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex space-x-2">
                                <a href="{{ route('keuzedeel.show', $keuzedeel->id) }}" 
                                   class="text-blue-600 hover:text-blue-800 text-sm">Bekijk</a>
                                @if($keuzedeel->inschrijvingen_count > 0)
                                    <a href="#" class="text-purple-600 hover:text-purple-800 text-sm">Inschrijvingen</a>
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $keuzedelen->links() }}
    </div>
</div>
@endsection
