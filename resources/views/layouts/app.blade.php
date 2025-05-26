<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventaris Perusahaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-white dark:bg-gray-800 shadow-md min-h-screen px-4 py-6">
        <h2 class="text-lg font-bold text-gray-700 dark:text-white mb-4">Menu</h2>
        <ul class="space-y-2">
            <li><a href="/dashboard" class="block px-2 py-1 rounded hover:bg-gray-200 dark:hover:bg-gray-700">Dashboard</a></li>
            <li><a href="/assets" class="block px-2 py-1 rounded hover:bg-gray-200 dark:hover:bg-gray-700">Aset</a></li>
            <li><a href="/employees" class="block px-2 py-1 rounded hover:bg-gray-200 dark:hover:bg-gray-700">Karyawan</a></li>
            <li><a href="/transactions" class="block px-2 py-1 rounded hover:bg-gray-200 dark:hover:bg-gray-700">Transaksi</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
        @yield('content')
    </main>

    @stack('scripts')
</body>
</html>
