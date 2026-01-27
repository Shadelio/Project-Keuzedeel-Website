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
                        <svg class="inline w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        Inschrijvingen
                    </a>
                    <a href="{{ route('admin.keuzedelen') }}" 
                       class="block px-4 py-2 rounded hover:bg-blue-50 {{ request()->routeIs('admin.keuzedelen') ? 'bg-blue-100 text-blue-600' : '' }}">
                        <svg class="inline w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                        Keuzedelen
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
