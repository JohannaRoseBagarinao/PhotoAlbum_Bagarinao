<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Photo Album</title>

    {{-- Link your external CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Valeria&display=swap" rel="stylesheet">

</head>

<body class="@yield('body-class')">

    <header>
        <a href="{{ route('homepage') }}" class="home-button">
            <div class="logo-container">
                <h2 class="logo-text">HANA'S ODYSSEY</h2>
            </div>
        </a>
    </header>

    <main class="min-h-screen">
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 Hana's Odyssey. All rights reserved.</p>
    </footer>

    <script src="{{ asset('javascript/code.js') }}"></script>
    @yield('scripts')

</body>
</html>
