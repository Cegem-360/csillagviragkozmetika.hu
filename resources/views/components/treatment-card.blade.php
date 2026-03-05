@props(['image', 'alt', 'title', 'description'])

<div class="treatment-card group rounded-[1.5rem] overflow-hidden transition-all duration-350 cursor-default border border-transparent bg-white hover:-translate-y-1.5 hover:shadow-[0_20px_50px_rgba(42,34,32,0.1)] hover:border-rose/20 dark-section:bg-white/[0.06] dark-section:border-white/[0.08] dark-section:hover:bg-white/10 dark-section:hover:border-gold/30 reveal">
    <div class="h-[200px] overflow-hidden bg-rose-light relative">
        <img src="{{ asset($image) }}" alt="{{ $alt }}" loading="lazy"
             class="w-full h-full object-cover transition-transform duration-600 ease-out group-hover:scale-[1.06]">
    </div>
    <div class="p-6">
        <h3 class="font-display text-[1.3rem] font-normal text-charcoal mb-2.5 dark-section:text-white">{{ $title }}</h3>
        <p class="text-[0.85rem] text-text-light leading-[1.75] dark-section:text-white/60">{{ $description }}</p>
    </div>
</div>
