@props(['brand', 'origin', 'variant' => 'gigi'])

@php
    $logos = [
        'gigi'  => 'images/gigi.png',
        'ilcsi' => 'images/ilcsi.png',
    ];
@endphp

<div class="product-card rounded-[1.5rem] overflow-hidden bg-white border border-cream-dark transition-all duration-350 hover:-translate-y-1.5 hover:shadow-[0_20px_50px_rgba(42,34,32,0.1)] h-full flex flex-col">
    <div class="flex items-center justify-center p-10 h-[200px] shrink-0">
        <img src="{{ asset($logos[$variant] ?? $logos['gigi']) }}" alt="{{ $brand }} logó" class="max-w-[200px] max-h-[120px] object-contain">
    </div>
    <div class="p-8 pt-0 flex-1">
        <div class="w-full h-px bg-cream-dark mb-6"></div>
        <div class="font-display text-[2.2rem] font-normal tracking-[0.05em] text-charcoal mb-2">{{ $brand }}</div>
        <div class="inline-block bg-cream px-3 py-0.5 rounded-full text-[0.72rem] tracking-[0.15em] uppercase text-text-light mb-3">{{ $origin }}</div>
        <p class="text-[0.85rem] leading-[1.7] text-text-light">{{ $slot }}</p>
    </div>
</div>
