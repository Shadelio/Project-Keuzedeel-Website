@extends('admin.layout')

@section('title', 'Inschrijvingen Beheren')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <h1 class="text-2xl font-bold mb-6">Inschrijvingen Beheren</h1>

    <div class="mb-4 flex justify-between items-center">
        <div class="flex space-x-4">
            <a href="{{ route('admin.inschrijvingen') }}" class="px-4 py-2 bg-blue-100 text-blue-700 rounded hover:bg-blue-200">
                Alle ({{ \App\Models\Inschrijving::count() }})
            </a>
            <a href="?status=geaccepteerd" class="px-4 py-2 bg-green-100 text-green-700 rounded hover:bg-green-200">
                Geaccepteerd ({{ \App\Models\Inschrijving::where('status', 'geaccepteerd')->count() }})
            </a>
            <a href="?status=ingeschreven" class="px-4 py-2 bg-yellow-100 text-yellow-700 rounded hover:bg-yellow-200">
                Wachtend ({{ \App\Models\Inschrijving::where('status', 'ingeschreven')->count() }})
            </a>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Student</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Email</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Keuzedeel</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Code</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Status</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Inschrijfdatum</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Opmerkingen</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inschrijvingen as $inschrijving)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3 font-medium">{{ $inschrijving->user->name }}</td>
                        <td class="px-4 py-3 text-sm text-gray-600">{{ $inschrijving->user->email }}</td>
                        <td class="px-4 py-3">
                            <div>
                                <div class="font-medium">{{ $inschrijving->keuzedeel->titel }}</div>
                                <div class="text-sm text-gray-500">{{ $inschrijving->keuzedeel->niveau }}</div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-sm">{{ $inschrijving->keuzedeel->code }}</td>
                        <td class="px-4 py-3">
                            <span class="px-2 py-1 rounded text-xs {{ 
                                $inschrijving->status === 'geaccepteerd' ? 'bg-green-100 text-green-800' : 
                                'bg-yellow-100 text-yellow-800' 
                            }}">
                                {{ $inschrijving->status }}
                            </span>
                        </td>
                        <td class="px-4 py-3 text-sm">{{ $inschrijving->inschrijfdatum?->format('d-m-Y') ?? '-' }}</td>
                        <td class="px-4 py-3 text-sm text-gray-600">{{ $inschrijving->opmerkingen ?? '-' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $inschrijvingen->links() }}
    </div>
</div>
@endsection
