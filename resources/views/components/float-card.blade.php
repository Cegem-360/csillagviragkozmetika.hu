@props(['icon', 'title', 'subtitle', 'position' => ''])

<div class="hero-float-card absolute bg-white rounded-[0.75rem] py-3.5 px-5 shadow-[0_8px_32px_rgba(42,34,32,0.1)] flex items-center gap-3 animate-[float_5s_ease-in-out_infinite] {{ $position }}">
    <div class="w-9 h-9 rounded-full bg-rose-light flex items-center justify-center text-base shrink-0">
        {{ $icon }}
    </div>
    <div>
        <strong class="block text-[0.8rem] font-medium text-charcoal">{{ $title }}</strong>
        <span class="text-[0.7rem] text-text-light">{{ $subtitle }}</span>
    </div>
</div>
