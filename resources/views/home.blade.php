@extends('layouts.app')

@section('content')

{{-- ═══════════════════════════════════════════════
     HERO
═══════════════════════════════════════════════ --}}
<section class="hero relative min-h-screen flex items-center overflow-hidden bg-cream" id="fooldal">
    {{-- Background gradients --}}
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_80%_60%_at_75%_45%,rgba(212,180,131,0.18)_0%,transparent_60%),radial-gradient(ellipse_50%_50%_at_20%_70%,rgba(200,135,122,0.12)_0%,transparent_55%)]"></div>
    {{-- Pattern --}}
    <div class="absolute inset-0 opacity-[0.04] hero-pattern-bg"></div>

    <div class="max-w-[1240px] mx-auto px-[clamp(1.25rem,5vw,3rem)]">
        <div class="relative z-[2] grid grid-cols-2 items-center gap-16 py-28 pb-20 max-md:grid-cols-1 max-md:gap-12 max-md:py-24 max-md:pb-16">
            <div>
                <div class="inline-flex items-center gap-3 mb-6 text-xs tracking-[0.2em] uppercase text-gold font-normal before:content-[''] before:block before:w-8 before:h-px before:bg-gold reveal">
                    XIX. ker. Kispest
                </div>
                <h1 class="font-display text-[clamp(3rem,6vw,5.5rem)] font-light leading-[1.08] text-charcoal mb-7 reveal">
                    Ahol a szépség<br>
                    <em class="italic text-rose-dark">megszületik</em>
                </h1>
                <p class="text-base text-text-light max-w-[26rem] leading-[1.8] mb-10 reveal">
                    Professzionális kozmetikai kezelések természetes alapanyagokból,
                    kellemes kertvárosi környezetben — mert Ön megérdemli a legjobbat.
                </p>
                <div class="flex flex-wrap gap-4 items-center reveal">
                    <a href="#elerhetosegek" class="inline-flex items-center gap-2.5 py-3.5 px-8 bg-rose text-white rounded-full text-[0.85rem] font-normal tracking-[0.08em] transition-all duration-350 hover:bg-rose-dark hover:-translate-y-0.5 hover:shadow-[0_12px_30px_rgba(200,135,122,0.35)]">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 4h4l2 5-2.5 1.5a11 11 0 005 5L15 13l5 2v4a2 2 0 01-2 2A16 16 0 015 4a2 2 0 012-2z"/></svg>
                        Időpont kérés
                    </a>
                    <a href="#alap-kezelesek" class="inline-flex items-center gap-2 text-[0.85rem] text-text-light tracking-[0.05em] transition-colors duration-250 hover:text-rose-dark [&_svg]:transition-transform [&_svg]:duration-250 [&:hover_svg]:translate-x-1">
                        Kezelések megtekintése
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
                <div class="flex flex-wrap gap-3 mt-10 reveal">
                    <x-badge>✨ GIGI termékek</x-badge>
                    <x-badge>🌿 Ilcsi naturális</x-badge>
                    <x-badge>🕐 Hétköznap 9–20 h</x-badge>
                    <x-badge>🅿 Ingyenes parkolás</x-badge>
                </div>
            </div>

            <div class="relative flex justify-center max-md:order-first reveal-scale">
                <div class="relative w-full max-w-[480px] max-md:max-w-[300px]">
                    {{-- Dekoratív körök --}}
                    <div class="absolute w-[200px] h-[200px] rounded-full border border-gold-light opacity-30 -top-10 -right-10 animate-[spin-slow-cw_25s_linear_infinite]"></div>
                    <div class="absolute w-[120px] h-[120px] rounded-full border border-gold-light opacity-30 bottom-5 -left-[30px] animate-[spin-slow-ccw_18s_linear_infinite]"></div>

                    {{-- Kép --}}
                    <div class="relative overflow-hidden aspect-[4/5] bg-rose-light animate-[morph_12s_ease-in-out_infinite]">
                        <img src="{{ asset('images/hero.jpg') }}" alt="Professzionális kozmetikai kezelés" class="w-full h-full object-cover object-center">
                    </div>

                    {{-- Float kártyák --}}
                    <x-float-card icon="⭐" title="Prémium kezelések" subtitle="GIGI & Ilcsi termékekkel" position="bottom-[8%] -right-[5%]" />
                    <x-float-card icon="🌿" title="2019 óta" subtitle="Tapasztalt kozmetikus" position="top-[15%] -left-[8%] animate-[float_5s_ease-in-out_infinite_2.5s] max-md:hidden" />
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════
     BEMUTATKOZÁS
═══════════════════════════════════════════════ --}}
<section id="bemutatkozas" class="bg-white relative overflow-hidden py-[clamp(4rem,8vw,7rem)] before:content-[''] before:absolute before:top-0 before:right-0 before:w-[45%] before:h-full before:bg-gradient-to-br before:from-cream before:to-cream-dark before:[clip-path:polygon(15%_0%,100%_0%,100%_100%,0%_100%)] max-md:before:hidden">
    <div class="max-w-[1240px] mx-auto px-[clamp(1.25rem,5vw,3rem)]">
        <div class="relative z-[1] grid grid-cols-2 gap-20 items-center max-md:grid-cols-1 max-md:gap-12">
            {{-- Kép --}}
            <div class="relative reveal-left">
                <div class="rounded-[1.5rem] overflow-hidden aspect-[3/4] bg-rose-light">
                    <img src="{{ asset('images/balatoni-marianna.jpg') }}" alt="Balatoni Marianna kozmetikus" class="w-full h-full object-cover">
                </div>
                <div class="about-cert absolute -bottom-6 -right-6 max-md:right-4 bg-charcoal text-white rounded-[0.75rem] py-5 px-6 text-center">
                    <strong class="block font-display text-[2.2rem] font-light leading-none text-gold-light">2019</strong>
                    <span class="text-[0.7rem] tracking-[0.1em] uppercase opacity-70">óta fogad vendégeket</span>
                </div>
            </div>

            {{-- Szöveg --}}
            <div class="reveal-right">
                <div class="section-label inline-flex items-center gap-2.5 text-[0.72rem] tracking-[0.2em] uppercase text-gold font-normal mb-4 before:content-[''] before:block before:w-6 before:h-px before:bg-gold">
                    Bemutatkozás
                </div>
                <h2 class="section-title font-display text-[clamp(2.2rem,4.5vw,3.5rem)] font-light text-charcoal leading-[1.15] mb-6">
                    <em class="italic text-rose-dark">Balatoni Marianna</em><br>
                    vagyok, kozmetikus
                </h2>
                <div class="w-12 h-px bg-gradient-to-r from-gold to-transparent my-5"></div>
                <p class="text-[0.95rem] text-text-light leading-[1.9] mb-4">2019-óta az otthonunkban létrehozott szépségszalonban fogadom Vendégeimet, így megteremtve az ideális környezetet, melyben a kozmetikai szolgáltatás az általam elvárt magasabb szinten végezhető.</p>
                <p class="text-[0.95rem] text-text-light leading-[1.9] mb-4">Jöjjön el, látogasson meg, tegyen egy próbát, hogy <strong class="text-charcoal font-medium">megszépülve feltöltődjön</strong>, és kipihenten távozhasson!</p>
                <p class="text-[0.95rem] text-text-light leading-[1.9] mb-4">Kellemes kertvárosi környezetben, <strong class="text-charcoal font-medium">nyugodt, jó minőségű zenével</strong> (kívánság szerint csenddel!), professzionális és Ilcsi naturális alapanyagokkal, levegő és víztisztító berendezéssel, ingyenes WiFi-vel várom a klímatizált CsillagVirág kozmetikában.</p>
                <p class="text-[0.95rem] text-text-light leading-[1.9] mb-4">A <strong class="text-charcoal font-medium">194-es busz Batthyány utcai megállójától 80 méterre!</strong></p>

                <div class="grid grid-cols-2 gap-4 mt-8 max-md:grid-cols-1">
                    <x-about-feature icon="🌬️" text="Levegő- és víztisztító berendezés" />
                    <x-about-feature icon="🌡️" text="Klímatizált, kényelmes szalon" />
                    <x-about-feature icon="📶" text="Ingyenes WiFi" />
                    <x-about-feature icon="🅿" text="Ingyenes parkolás, kamerarendszer" />
                    <x-about-feature icon="🚌" text="194-es busz, 80 m-re" />
                    <x-about-feature icon="👩" text="Kizárólag női vendégek" />
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════
     ALAP KEZELÉSEK
═══════════════════════════════════════════════ --}}
<section id="alap-kezelesek" class="bg-cream py-[clamp(4rem,8vw,7rem)]">
    <div class="max-w-[1240px] mx-auto px-[clamp(1.25rem,5vw,3rem)]">
        <div class="flex justify-between items-end mb-14 flex-wrap gap-6">
            <div>
                <x-section-header label="Alap kezelések">
                    Az arcápolás <em>alapjai</em>
                </x-section-header>
            </div>
            <p class="section-subtitle text-base text-text-light max-w-[36rem] leading-[1.8]">Minden kezelés előzetes bejelentkezés alapján, személyre szabottan.</p>
        </div>

        <div class="grid grid-cols-[repeat(auto-fill,minmax(300px,1fr))] gap-6" id="alapGrid">
            <x-treatment-card
                image="images/alap-kezelesek/tisztito-arckezeles.jpg"
                alt="Tisztító arckezelés"
                title="Tisztító arckezelés"
                description="Ajánlom minden mitesszeres, pattanásos bőrtípusra, 4–6 hetes gyakorisággal. Bőrtisztítás, radírozás, felpuhítás, mitesszerek eltávolítása, VIO, összehúzó pakolás és gépi táplálás." />

            <x-treatment-card
                image="images/alap-kezelesek/hidratalo-hyaluronsavas-maszk.jpg"
                alt="Hidratáló hyaluronsavas maszk"
                title="Hidratáló hyaluronsavas maszk"
                description="Az idősödő korosztálynak ajánlott — a bőr mélyebb rétegeit is hatékonyan hidratálja, visszaadja a rugalmasságot és a frissességet." />

            <x-treatment-card
                image="images/alap-kezelesek/arany-ampulla.jpg"
                alt="Arany ampulla"
                title="Arany ampulla"
                description="24k tisztaságú aranylemezkéket, hyaluronsavat és tengeri mikro-kollagént tartalmazó, öregedést gátló, bőrfeszesítő hatóanyag koncentrátum. Idősödő korosztálynak ajánlott." />

            <x-treatment-card
                image="images/alap-kezelesek/peeling.jpg"
                alt="Peeling"
                title="Peeling (radírozás)"
                description="A hatásos kozmetikai kezelés peeling nélkül elképzelhetetlen. Az elhalt hámréteg eltávolítása kémiai vagy mechanikai módszerrel — a hatóanyagok mélyebben szívódnak fel." />

            <x-treatment-card
                image="images/alap-kezelesek/anti-ageing-nutri-peptides-maszk.jpg"
                alt="Anti-ageing nutri-peptides maszk"
                title="Anti-ageing nutri-peptides maszk"
                description="A bőr öregedésének biokémiai folyamatait lassító, ráncokat elsimító maszk. Erős antioxidáns, kollagén szintézist aktivizál. Minden bőrtípusra ajánlott." />

            <x-treatment-card
                image="images/alap-kezelesek/arcmasszazs.jpg"
                alt="Arcmasszázs"
                title="Arcmasszázs"
                description="25 perc, minden kezelés előtt alkalmazom, hatóanyag tartalmú masszázskrémmel. Ellazító, pihentetö, ránctalanító hatással bír — személyes kedvencem." />

            <x-treatment-card
                image="images/alap-kezelesek/szemkornyek-es-szajmaszk.jpg"
                alt="Szemkörnyék és szájmaszk"
                title="Szemkörnyék és szájmaszk"
                description="Nyugtató, ránctalanító hatású maszk a legérzékenyebb területekre — a szem- és szájkörnyékre — a finom ráncok finoman csökkentéséért." />
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════
     GÉPI KEZELÉSEK
═══════════════════════════════════════════════ --}}
<section id="gepi-kezelesek" data-theme="dark" class="bg-charcoal text-white py-[clamp(4rem,8vw,7rem)]">
    <div class="max-w-[1240px] mx-auto px-[clamp(1.25rem,5vw,3rem)]">
        <div class="flex justify-between items-end mb-14 flex-wrap gap-6">
            <div>
                <x-section-header label="Gépi kezelések">
                    Modern <em>technológia</em><br>az arcápolásban
                </x-section-header>
            </div>
            <p class="section-subtitle text-base text-white/55 max-w-[36rem] leading-[1.8]">
                Professzionális eszközök a látható és tartós eredményért.
            </p>
        </div>

        <div class="grid grid-cols-[repeat(auto-fill,minmax(300px,1fr))] gap-6" id="gepiGrid">
            <x-treatment-card
                image="images/gepi-kezelesek/005-16721--800.jpg"
                alt="Ultrahangos kezelés"
                title="Ultrahangos kezelés"
                description="Javítja a hajszálerek szállítási kapacitását és az izomszövetek vérellátását. Normalizálja a bőrben zajló élettani folyamatokat. Méregtelenítő hatású, a ráncok kezelésére ajánlott." />

            <x-treatment-card
                image="images/gepi-kezelesek/arcvasalas.jpg"
                alt="Arcvasalás"
                title="Arcvasalás"
                description="Meleg fázisa megnyitja a pórusokat, elősegíti a hatóanyagok felszívódását. Hideg fázisa zárja a pórusokat, csökkenti a szemek alatti táskásodást. Dupla hatás, dupla eredmény." />

            <x-treatment-card
                image="images/gepi-kezelesek/mikrodermabrazio-800.jpg"
                alt="Mikrodermabrázió"
                title="Mikrodermabrázió"
                description="Luxus bőrcsiszolás gyémántokkal. Azonnali eredmény: a bőrfelület megfiatalodik, csökkennek a ráncok és a pigmentfoltok, egyenletesebb és ragyogóbb tónus." />

            <x-treatment-card
                image="images/gepi-kezelesek/vio.jpg"
                alt="VIO kezelés"
                title="VIO kezelés"
                description="Masszírozásra, fertőtlenítésre, a vérbőség fokozására használjuk. A nemesgázzal töltött üvegcsőbe vezetett elektromosság által fejlődő ózon fertőtlenítő hatással bír." />
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════
     TERMÉKEK
═══════════════════════════════════════════════ --}}
<section id="termekek" class="bg-cream-dark py-[clamp(4rem,8vw,7rem)]">
    <div class="max-w-[1240px] mx-auto px-[clamp(1.25rem,5vw,3rem)]">
        <x-section-header label="Termékek" subtitle="Két megbízható, professzionális márka — amelyek minőségében teljes mértékben hiszek.">
            Csak a <em>legjobb</em> alapanyagok
        </x-section-header>

        <div class="products-grid grid grid-cols-2 gap-8 mt-14 items-stretch max-sm:grid-cols-1">
            <div class="reveal-left h-full">
                <x-product-card brand="GIGI" origin="🇮🇱 Izrael" variant="gigi">
                    A szakmában jó hírnévnek örvendő, minőségi, professzionális anyagokat forgalmazó cég. Izrael legnagyobb kozmetikaipari vállalkozása, hazánkban igen elismert a kozmetikusok körében.
                </x-product-card>
            </div>

            <div class="reveal-right h-full">
                <x-product-card brand="Ilcsi" origin="🇭🇺 Magyarország" variant="ilcsi">
                    Hazai termék, csak friss és természetes alapanyagokból állítják elő, árfekvése kedvezőbb. Elsősorban tini kezelésekhez ajánlom — természetesen, hatékonyan.
                </x-product-card>
            </div>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════
     ÁRLISTA
═══════════════════════════════════════════════ --}}
<section id="arak" class="bg-white py-[clamp(4rem,8vw,7rem)]">
    <div class="max-w-[1240px] mx-auto px-[clamp(1.25rem,5vw,3rem)]">
        <x-section-header label="Árlista" subtitle="Minden ár tartalmazza a személyre szabott kezelést. Előzetes bejelentkezés szükséges!">
            Átlátható <em>árak</em>
        </x-section-header>

        {{-- Új árlista --}}
        <div class="mt-10">
            <table class="w-full border-collapse">
                <tbody>
                    <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Arckezelés tisztítással</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">19 500 Ft</td></tr>
                    <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Hidratáló kezelés arcvasalóval</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">18 000 Ft</td></tr>
                    <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Ránctalanító kezelés ultrahanggal</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">21 000 Ft</td></tr>
                    <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Tápláló kezelés</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">15 000 Ft</td></tr>
                    <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Frissítő arcmasszázs</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">10 000 Ft</td></tr>
                    <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Tápláló masszázs</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">12 000 Ft</td></tr>
                    <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Arc és dekoltázs masszázs</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">15 000 Ft</td></tr>
                    <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Mikrodermabráziós arckezelés tisztítással</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">22 000 Ft</td></tr>
                    <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Mikrodermabrázió + maszk</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">16 000 Ft</td></tr>
                    <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Arcpakolás és maszkok</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">10 000 Ft</td></tr>
                    <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Masszázs + mikrodermabrázió + ultrahang + pakolás</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">22 000 Ft</td></tr>
                    <tr class="border-b border-rose-light"><td colspan="2" class="pt-5 pb-2 font-display text-[1.1rem] font-normal text-charcoal">Szemöldök és szempilla</td></tr>
                    <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Szempilla festés</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">6 000 Ft</td></tr>
                    <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Szemöldök festés</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">5 500 Ft</td></tr>
                    <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Szemöldök szedés (csipesszel)</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">4 000 Ft</td></tr>
                    <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Szemöldök formázás (csipesszel / gyantával)</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">6 000 Ft</td></tr>
                </tbody>
            </table>
        </div>

        {{-- Régi tabos árlista --}}
        @if(false)
        <div class="mt-10">
            {{-- Tabs --}}
            <div class="price-tabs flex gap-2 border-b border-cream-dark mb-10 overflow-x-auto">
                <button class="price-tab py-3 px-6 border-b-2 border-transparent bg-transparent font-body text-[0.83rem] tracking-[0.05em] text-text-light cursor-pointer transition-all duration-250 whitespace-nowrap -mb-px hover:text-rose-dark active" data-tab="gigi">GIGI termékekkel</button>
                <button class="price-tab py-3 px-6 border-b-2 border-transparent bg-transparent font-body text-[0.83rem] tracking-[0.05em] text-text-light cursor-pointer transition-all duration-250 whitespace-nowrap -mb-px hover:text-rose-dark" data-tab="ilcsi">Ilcsi termékekkel</button>
                <button class="price-tab py-3 px-6 border-b-2 border-transparent bg-transparent font-body text-[0.83rem] tracking-[0.05em] text-text-light cursor-pointer transition-all duration-250 whitespace-nowrap -mb-px hover:text-rose-dark" data-tab="egyeb">Egyéb kezelések</button>
                <button class="price-tab py-3 px-6 border-b-2 border-transparent bg-transparent font-body text-[0.83rem] tracking-[0.05em] text-text-light cursor-pointer transition-all duration-250 whitespace-nowrap -mb-px hover:text-rose-dark" data-tab="gyantazas">Gyantázások</button>
            </div>

            {{-- GIGI --}}
            <div class="price-panel active" id="panel-gigi">
                <table class="w-full border-collapse">
                    <tbody>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Arckezelés tisztítással</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">12 000 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Hidratáló kezelés arcvasalóval</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">11 000 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Ránctalanító kezelés ultrahanggal</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">12 000 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Tápláló kezelés</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">10 500 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Frissítő arcmasszázs</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">6 000 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Tápláló arcmasszázs</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">7 500 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Arc és dekoltázs masszázs</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">6 500 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Hát tisztítás</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">5 000 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Mikrodermabráziós arckezelés tisztítással</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">12 000 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Mikrodermabrázió + maszk</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">10 500 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Arcpakolások és maszkok</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">3 500–4 000 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Masszázs + mikrodermabrázió + ultrahang + pakolás</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">11 800 Ft</td></tr>
                        <tr class="border-b border-rose-light"><td colspan="2" class="pt-5 pb-2 font-display text-[1.1rem] font-normal text-charcoal">Szemöldök és szempilla</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Szempilla festés</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">4 000 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Szemöldök festés</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">3 500 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Szemöldök szedés (csipesszel)</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">2 000 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Szemöldök formázás (csipesszel és gyantával)</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">3 500 Ft</td></tr>
                    </tbody>
                </table>
            </div>

            {{-- ILCSI --}}
            <div class="price-panel" id="panel-ilcsi">
                <table class="w-full border-collapse">
                    <tbody>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Tisztító kezelés (~90 perc)</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">8 000 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Tini kezelés (~50 perc)</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">6 500 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Ráncok kezelése, hidratálás, hyaluron (~90 perc)</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">9 000 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Ránctalanító kezelés ultrahanggal (~40 perc)</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">7 000 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Mikrodermabráziós kíméletes bőrcsiszoló kezelés (~50 perc)</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">6 500 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Ránctalanító arcvasalás (~40 perc)</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">7 000 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Frissítő, tápláló arcmasszázs (~30 perc)</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">4 000 Ft</td></tr>
                    </tbody>
                </table>
            </div>

            {{-- EGYÉB --}}
            <div class="price-panel" id="panel-egyeb">
                <table class="w-full border-collapse">
                    <tbody>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Szempilla festés</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">4 000 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Szemöldök festés</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">3 500 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Szemöldök szedés (csipesszel)</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">2 000 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Szemöldök formázás (csipesszel és gyantával)</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">3 500 Ft</td></tr>
                    </tbody>
                </table>
            </div>

            {{-- GYANTÁZÁS --}}
            <div class="price-panel" id="panel-gyantazas">
                <table class="w-full border-collapse">
                    <tbody>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Bajusz</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">1 800 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Alkar</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">2 000 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Kar</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">2 200 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Hónalj</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">2 500 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Női intim (bikini vonal)</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">2 000 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Fazon (formára)</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">2 000 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Lábszár (térdig)</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">2 000 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Comb</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">2 800 Ft</td></tr>
                        <tr class="border-b border-cream-dark transition-colors hover:bg-cream"><td class="py-3.5 text-[0.88rem] text-skin-text pr-4">Teljes láb</td><td class="py-3.5 text-[0.88rem] text-right font-medium text-rose-dark whitespace-nowrap">4 500 Ft</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
        @endif

        {{-- Prémium --}}
        <div class="price-premium bg-gradient-to-br from-charcoal to-[#4A3D3A] rounded-[1.5rem] p-8 text-white mt-10 grid grid-cols-2 gap-6 max-sm:grid-cols-1 reveal">
            <x-premium-item title="CASADA Masszázs Fotel" price="2 000 Ft" duration="20 perc">
                Választható programok: általános, jóga, fájdalom csillapítás, ellazulás, felfrissülés.
            </x-premium-item>
            <x-premium-item title="CASADA Power Board" price="2 000 Ft" duration="15 perc">
                Rázópad — hatékony testformálás és anyagcsere-serkentés.
            </x-premium-item>
            <p class="col-span-full text-[0.83rem] text-gold-light text-center pt-2">🎁 10 000 Ft feletti megrendelés esetén ajándékként választható valamelyik prémium szolgáltatás!</p>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════
     ELÉRHETŐSÉG
═══════════════════════════════════════════════ --}}
<section id="elerhetosegek" class="bg-cream py-[clamp(4rem,8vw,7rem)]">
    <div class="max-w-[1240px] mx-auto px-[clamp(1.25rem,5vw,3rem)]">
        <x-section-header label="Elérhetőség">
            Foglaljon <em>időpontot</em>
        </x-section-header>

        <div class="h-10"></div>

        <div class="grid grid-cols-2 gap-16 items-start max-md:grid-cols-1 max-md:gap-12">
            <div class="reveal-left">
                <p class="font-display text-[1.8rem] font-normal text-charcoal mb-1">Balatoni Marianna</p>
                <p class="text-[0.85rem] text-text-light mb-10 tracking-[0.05em]">CsillagVirág Kozmetika</p>

                <div class="flex flex-col gap-5">
                    <x-contact-item label="Cím">
                        <x-slot:icon>
                            <svg class="w-[18px] h-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M17.657 16.657L13.414 20.9a2 2 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </x-slot:icon>
                        <p>1196 Kispest, Batthyány u. 126.<br>(194-es busz, Batthyány utca megálló, 80 m)</p>
                    </x-contact-item>

                    <x-contact-item label="Telefon">
                        <x-slot:icon>
                            <svg class="w-[18px] h-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </x-slot:icon>
                        <a href="tel:+36203347041">+36 20 334 7041</a>
                    </x-contact-item>

                    <x-contact-item label="E-mail">
                        <x-slot:icon>
                            <svg class="w-[18px] h-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </x-slot:icon>
                        <a href="mailto:marianna@balatonikft.hu">marianna@balatonikft.hu</a>
                    </x-contact-item>

                    <x-contact-item label="Nyitvatartás">
                        <x-slot:icon>
                            <svg class="w-[18px] h-[18px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <polyline points="12 6 12 12 16 14"/>
                            </svg>
                        </x-slot:icon>
                        <p>Hétköznap: 09:00–20:00<br>Kizárólag előzetes bejelentkezéssel</p>
                    </x-contact-item>
                </div>

                <div class="mt-8 pt-6 border-t border-cream-dark">
                    <p class="text-[0.8rem] text-text-light mb-1"><strong class="text-skin-text">Balatoni Kft.</strong></p>
                    <p class="text-[0.8rem] text-text-light mb-1">Adószám: 10723537-2-43</p>
                    <p class="text-[0.8rem] text-rose-dark italic mt-2">Kozmetikánk kizárólag női vendégeket fogad.</p>
                </div>
            </div>

            <div class="reveal-right">
                <div class="rounded-[1.5rem] overflow-hidden h-[380px] bg-cream-dark relative">
                    <iframe
                        class="w-full h-full border-0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2697.3!2d19.1382!3d47.4348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741e3d!2sBatthy%C3%A1ny%20u.%20126.%2C%201196%20Budapest!5e0!3m2!1shu!2shu!4v1"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="CsillagVirág Kozmetika térkép">
                    </iframe>
                </div>
                <div class="mt-4 flex items-center gap-2 text-[0.8rem] text-text-light">
                    <svg class="w-4 h-4 text-rose shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/><path d="M12 8v4m0 4h.01"/>
                    </svg>
                    Ingyenes parkolás a ház előtt, beépített kamerarendszer.
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
