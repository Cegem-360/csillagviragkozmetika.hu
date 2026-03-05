@props(['label'])

<div class="contact-item flex items-start gap-4">
    <div class="w-11 h-11 rounded-full bg-rose-light flex items-center justify-center shrink-0 text-rose-dark">
        {{ $icon }}
    </div>
    <div>
        <strong class="block text-xs tracking-[0.1em] uppercase text-text-light mb-1">{{ $label }}</strong>
        <div class="text-[0.95rem] text-charcoal font-normal [&_a]:transition-colors [&_a]:duration-250 [&_a:hover]:text-rose-dark [&_p]:text-[0.95rem] [&_p]:text-charcoal [&_p]:font-normal">
            {{ $slot }}
        </div>
    </div>
</div>
