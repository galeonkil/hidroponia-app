<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
		<script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-core.min.js"></script>
		<script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-heatmap.min.js"></script>
		<script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-pie.min.js"></script>
		<script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-cartesian.min.js"></script>
		<script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-calendar.min.js"></script>
		<!-- Carga estos scripts en tu head o antes de tu código JS -->
		
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <main class="">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>

