<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <!-- Navigation bar -->
    <nav class="bg-gray-800 text-white p-4">
        <div class="container mx-auto">
            <!-- Your navigation bar content goes here -->
            <span class="font-semibold">ADMIN PAGE</span>
        </div>
    </nav>

    <!-- Page content -->
    <div class="container mx-auto py-6">
        <div class="flex">
            <!-- Sidebar -->
            <x-admin::admin-sidebar :sidebarItems="$sidebarItems"/>

            <!-- Main content -->
            <div class="ml-6 flex-1">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
