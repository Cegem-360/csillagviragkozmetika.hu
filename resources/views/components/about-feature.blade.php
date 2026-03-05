@props(['icon', 'text'])

<div class="flex items-start gap-2.5 text-[0.83rem] text-skin-text">
    <div class="w-7 h-7 rounded-full bg-rose-light flex items-center justify-center text-[0.8rem] shrink-0 mt-px">
        {{ $icon }}
    </div>
    <span>{{ $text }}</span>
</div>
