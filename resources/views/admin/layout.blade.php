<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-600 text-white shadow-lg">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-4">
                    <h1 class="text-xl font-bold">Admin Panel</h1>
                    <span class="text-sm bg-blue-700 px-2 py-1 rounded">{{ auth()->user()->name }}</span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('home') }}" class="hover:text-blue-200">Naar website</a>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="hover:text-blue-200">Uitloggen</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-6">
        <div class="flex gap-6">
            <!-- Sidebar -->
            <aside class="w-64 bg-white rounded-lg shadow-md p-4 h-fit">
                <nav class="space-y-2">
                    <a href="{{ route('admin.dashboard') }}" 
                       class="block px-4 py-2 rounded hover:bg-blue-50 {{ request()->routeIs('admin.dashboard') ? 'bg-blue-100 text-blue-600' : '' }}">
                        📊 Dashboard
                    </a>
                    <a href="{{ route('admin.inschrijvingen') }}" 
                       class="block px-4 py-2 rounded hover:bg-blue-50 {{ request()->routeIs('admin.inschrijvingen') ? 'bg-blue-100 text-blue-600' : '' }}">
                        📝 Inschrijvingen
                    </a>
                    <a href="{{ route('admin.keuzedelen') }}" 
                       class="block px-4 py-2 rounded hover:bg-blue-50 {{ request()->routeIs('admin.keuzedelen') ? 'bg-blue-100 text-blue-600' : '' }}">
                        📚 Keuzedelen
                    </a>
                    <a href="{{ route('admin.studenten') }}" 
                       class="block px-4 py-2 rounded hover:bg-blue-50 {{ request()->routeIs('admin.studenten') ? 'bg-blue-100 text-blue-600' : '' }}">
                        👥 Studenten
                    </a>
                    <a href="{{ route('admin.dubbeleInschrijvingen') }}" 
                       class="block px-4 py-2 rounded hover:bg-blue-50 {{ request()->routeIs('admin.dubbeleInschrijvingen') ? 'bg-blue-100 text-blue-600' : '' }}">
                        ⚠️ Dubbele Inschrijvingen
                    </a>
                    <a href="{{ route('admin.instellingen') }}" 
                       class="block px-4 py-2 rounded hover:bg-blue-50 {{ request()->routeIs('admin.instellingen') ? 'bg-blue-100 text-blue-600' : '' }}">
                        ⚙️ Instellingen
                    </a>
                </nav>
            </aside>

            <!-- Main Content -->
            <main class="flex-1">
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        {{ session('error') }}
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
