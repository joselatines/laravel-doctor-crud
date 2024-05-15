<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Consultorio Médico System</title>
    <link rel="icon" href="{{ asset('/favicon.ico') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Date input -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img width="30" src="{{ asset('/images/doc-logo.png') }}" alt="">
                    Consultorio Médico System
                </a>

                <div class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/patients') }}">
                            Pacientes <i class="fa-solid fa-user-injured"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/consultations') }}">
                            Consultas <i class="fa-solid fa-user-doctor"></i>
                        </a>
                    </li>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
    <footer class="p-4 d-grid">
                    <span>Hecho por José Latines, David Cala y Christopher Zapata</span>
                    <span>Proyecto CRUD © 2024</span>
    </footer>
    
    <script>
        flatpickr('#date', {
            enableTime: true, // Enable time selection
            dateFormat: "Y-m-d H:i", // Date format
            time_24hr: true // Use 24-hour time format
        });
    </script>
    
</body>
</html>
