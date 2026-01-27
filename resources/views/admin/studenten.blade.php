@extends('admin.layout')

@section('title', 'Studenten Beheren')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <h1 class="text-2xl font-bold mb-6">Studenten Beheren</h1>

    <div class="overflow-x-auto">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Naam</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Email</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Inschrijvingen</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Status</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Actief</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Acties</th>
                </tr>
            </thead>
            <tbody>
                @foreach($studenten as $student)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3 font-medium">{{ $student->name }}</td>
                        <td class="px-4 py-3 text-sm text-gray-600">{{ $student->email }}</td>
                        <td class="px-4 py-3">
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded text-xs">
                                {{ $student->inschrijvingen_count }}
                            </span>
                        </td>
                        <td class="px-4 py-3">
                            <span class="px-2 py-1 rounded text-xs {{ 
                                $student->role === 'admin' ? 'bg-purple-100 text-purple-800' : 
                                'bg-gray-100 text-gray-800' 
                            }}">
                                {{ $student->role }}
                            </span>
                        </td>
                        <td class="px-4 py-3">
                            <form action="{{ route('admin.toggleStudent', $student->id) }}" method="POST">
                                @csrf
                                <button type="submit" 
                                        class="px-3 py-1 rounded text-xs {{ 
                                            $student->is_active ? 'bg-green-100 text-green-800 hover:bg-green-200' : 
                                            'bg-red-100 text-red-800 hover:bg-red-200' 
                                        }}">
                                    {{ $student->is_active ? '✓ Actief' : '✗ Inactief' }}
                                </button>
                            </form>
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex space-x-2">
                                <a href="#" class="text-blue-600 hover:text-blue-800 text-sm">Bekijk</a>
                                @if($student->inschrijvingen_count > 0)
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
        {{ $studenten->links() }}
    </div>
</div>
@endsection
