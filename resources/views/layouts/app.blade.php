<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Blog')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    {{-- @include('layouts.header') → Memasukkan header.blade.php ke dalam layout utama. --}}
    @include('layouts.header');
    <div class="container">
        @yield('content')
        {{-- / bagian utama bisa di ubah oleh tiap halaman --}}
    </div>

    <footer>
        <p>&copy; 2025 My Blog</p>
    </footer>
</body>
</html>