<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    @vite(['resources/js/app.js'])
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">
    {{-- Sidebar --}}
    @include('partials.sidebar')

    {{-- Content --}}
    <main class="flex-1 p-6">
        <h1 class="text-2xl font-bold mb-6">@yield('title')</h1>
        @yield('content')
    </main>
</div>

</body>
</html>
