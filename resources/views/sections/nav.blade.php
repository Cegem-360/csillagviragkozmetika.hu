{{-- Navigation --}}
<nav class="fixed top-0 left-0 right-0 z-100 transition-all duration-400" id="mainNav">
    <div class="max-w-[1240px] mx-auto px-[clamp(1.25rem,5vw,3rem)]">
        <div class="flex items-center justify-between h-20">
            <a href="#" class="block">
                <img src="{{ asset('images/logo3.png') }}" alt="CsillagVirág Kozmetika" class="h-[46px] w-auto shrink-0">
            </a>

            <ul class="flex items-center gap-[clamp(1rem,2.5vw,2rem)] list-none max-[900px]:hidden">
                <li><a href="#bemutatkozas" class="relative text-[0.8rem] font-normal tracking-[0.1em] uppercase text-skin-text pb-0.5 transition-colors duration-250 hover:text-rose-dark after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-px after:bg-gold after:transition-[width] after:duration-300 after:ease-out hover:after:w-full">Bemutatkozás</a></li>
                <li><a href="#alap-kezelesek" class="relative text-[0.8rem] font-normal tracking-[0.1em] uppercase text-skin-text pb-0.5 transition-colors duration-250 hover:text-rose-dark after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-px after:bg-gold after:transition-[width] after:duration-300 after:ease-out hover:after:w-full">Alap kezelések</a></li>
                <li><a href="#gepi-kezelesek" class="relative text-[0.8rem] font-normal tracking-[0.1em] uppercase text-skin-text pb-0.5 transition-colors duration-250 hover:text-rose-dark after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-px after:bg-gold after:transition-[width] after:duration-300 after:ease-out hover:after:w-full">Gépi kezelések</a></li>
                <li><a href="#termekek" class="relative text-[0.8rem] font-normal tracking-[0.1em] uppercase text-skin-text pb-0.5 transition-colors duration-250 hover:text-rose-dark after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-px after:bg-gold after:transition-[width] after:duration-300 after:ease-out hover:after:w-full">Termékek</a></li>
                <li><a href="#arak" class="relative text-[0.8rem] font-normal tracking-[0.1em] uppercase text-skin-text pb-0.5 transition-colors duration-250 hover:text-rose-dark after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-0 after:h-px after:bg-gold after:transition-[width] after:duration-300 after:ease-out hover:after:w-full">Árlista</a></li>
                <li><a href="#elerhetosegek" class="py-2 px-5 bg-rose text-white rounded-full text-[0.78rem] tracking-[0.08em] uppercase transition-all duration-350 hover:bg-rose-dark hover:-translate-y-px">Kapcsolat</a></li>
            </ul>

            <button class="hidden max-[900px]:flex flex-col gap-[5px] cursor-pointer p-1 bg-transparent border-none" id="hamburgerBtn" aria-label="Menü megnyitása">
                <span class="block w-6 h-[1.5px] bg-charcoal transition-all duration-300"></span>
                <span class="block w-6 h-[1.5px] bg-charcoal transition-all duration-300"></span>
                <span class="block w-6 h-[1.5px] bg-charcoal transition-all duration-300"></span>
            </button>
        </div>
    </div>
</nav>

{{-- Mobil menü --}}
<div class="hidden data-[open]:flex fixed inset-0 bg-cream z-[99] flex-col items-center justify-center gap-10" id="mobileMenu">
    <button class="absolute top-6 right-6 text-2xl bg-transparent border-none cursor-pointer text-skin-text" id="mobileClose" aria-label="Bezárás">&times;</button>
    <a href="#bemutatkozas" class="mobile-link font-display text-[2rem] font-light text-charcoal tracking-[0.05em] transition-colors duration-250 hover:text-rose">Bemutatkozás</a>
    <a href="#alap-kezelesek" class="mobile-link font-display text-[2rem] font-light text-charcoal tracking-[0.05em] transition-colors duration-250 hover:text-rose">Alap kezelések</a>
    <a href="#gepi-kezelesek" class="mobile-link font-display text-[2rem] font-light text-charcoal tracking-[0.05em] transition-colors duration-250 hover:text-rose">Gépi kezelések</a>
    <a href="#termekek" class="mobile-link font-display text-[2rem] font-light text-charcoal tracking-[0.05em] transition-colors duration-250 hover:text-rose">Termékek</a>
    <a href="#arak" class="mobile-link font-display text-[2rem] font-light text-charcoal tracking-[0.05em] transition-colors duration-250 hover:text-rose">Árlista</a>
    <a href="#elerhetosegek" class="mobile-link font-display text-[2rem] font-light text-rose tracking-[0.05em] transition-colors duration-250 hover:text-rose-dark">Elérhetőségeim</a>
</div>
