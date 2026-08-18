<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="container">


        {{-- Navbar globale --}}
        @include('partials.header')

        <main>
            @yield('content')
        </main>

        {{-- Footer globale --}}
        @include('partials.footer')


        {{-- CTA globale --}}
        @include('partials.cta')
    </div>
</body>

</html>