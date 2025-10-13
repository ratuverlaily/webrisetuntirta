<!doctype html>
<html lang="en">

<head>
    @include('layouts_admin.head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">

    @include('layouts_admin.sidebar')

    <main class="main">
        @include('layouts_admin.header')

        @yield('content')

    </main>

    <!-- Tambahkan script Lucide di bawah -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
</body>