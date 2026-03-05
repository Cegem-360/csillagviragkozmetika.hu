@props(['title', 'price', 'duration'])

<div class="bg-white/[0.06] rounded-[0.75rem] p-5 border border-white/[0.08]">
    <h4 class="font-display text-[1.1rem] font-normal text-gold-light mb-1.5">{{ $title }}</h4>
    <p class="text-[0.82rem] text-white/60 leading-[1.6]">{{ $slot }}</p>
    <div class="mt-3 text-[1.3rem] font-medium text-white">
        {{ $price }} <span class="text-xs font-light opacity-70">/ {{ $duration }}</span>
    </div>
</div>
