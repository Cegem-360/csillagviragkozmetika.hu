<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CsillagVirág Kozmetika — XIX. ker. Kellemes, kertvárosi környezetben</title>
    <meta name="description" content="Balatoni Marianna kozmetikus — professzionális arckezelések, gépi kezelések, GIGI és Ilcsi termékekkel. 1196 Kispest, Batthyány u. 126.">
    <meta name="keywords" content="kozmetika, arckezelés, Kispest, Budapest, GIGI, Ilcsi, Balatoni Marianna, szépségszalon">
    <meta name="author" content="Balatoni Marianna">

    {{-- Open Graph --}}
    <meta property="og:title" content="CsillagVirág Kozmetika — Professzionális arckezelések Kispesten">
    <meta property="og:description" content="Balatoni Marianna kozmetikus — professzionális arckezelések, gépi kezelések, GIGI és Ilcsi termékekkel.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.csillagviragkozmetika.hu">
    <meta property="og:image" content="{{ asset('images/balatoni-marianna.jpg') }}">
    <meta property="og:locale" content="hu_HU">

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('images/logo3.png') }}">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">

    {{-- GSAP --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" defer></script>

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-cream">
    {{-- Navigation --}}
    @include('sections.nav')

    {{-- Main Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('sections.footer')

    {{-- Scroll to top --}}
    <button class="fixed bottom-8 right-8 z-50 w-[46px] h-[46px] rounded-full bg-rose text-white border-none cursor-pointer flex items-center justify-center shadow-[0_4px_20px_rgba(200,135,122,0.4)] opacity-0 translate-y-5 pointer-events-none transition-all duration-350 [&.visible]:opacity-100 [&.visible]:translate-y-0 [&.visible]:pointer-events-auto hover:bg-rose-dark hover:-translate-y-[3px]" id="scrollTop" aria-label="Vissza a tetejére">
        <svg class="w-[18px] h-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M5 15l7-7 7 7"/>
        </svg>
    </button>
</body>
</html>
