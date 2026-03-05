@props(['label', 'subtitle' => null])

<div class="section-label inline-flex items-center gap-2.5 text-[0.72rem] tracking-[0.2em] uppercase text-gold font-normal mb-4 before:content-[''] before:block before:w-6 before:h-px before:bg-gold dark-section:text-gold-light dark-section:before:bg-gold-light reveal">
    {{ $label }}
</div>
<h2 class="section-title font-display text-[clamp(2.2rem,4.5vw,3.5rem)] font-light text-charcoal leading-[1.15] dark-section:text-white [&_em]:italic [&_em]:text-rose-dark [&_em]:not-italic dark-section:[&_em]:text-rose-light reveal">
    {!! $slot !!}
</h2>
@if($subtitle)
    <p class="section-subtitle mt-4 text-base text-text-light max-w-[36rem] leading-[1.8] dark-section:text-white/55 reveal">{{ $subtitle }}</p>
@endif
