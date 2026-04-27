<div class="p-[2px] rounded-lg bg-gradient-to-r from-[#F37584] to-[#ff9aa5]">
    @if(isset($href))
        <a href="{{ $href }}" 
           id="{{ $id ?? '' }}" 
           class="inline-block w-full text-center rounded-lg bg-[var(--color-surface)] px-4 py-2 text-white
                  hover:bg-[#F37584] hover:text-white
                  hover:shadow-[0_0_0_2px_rgba(243,117,132,0.3),0_0_12px_rgba(243,117,132,0.7),0_0_20px_rgba(243,117,132,0.4)]
                  transition-all duration-300">
            {{ $slot ?? 'Button' }}
        </a>
    @else
        <button type="{{ $type ?? 'button' }}" 
                id="{{ $id ?? '' }}" 
                class="w-full rounded-lg bg-[var(--color-surface)] px-4 py-2 text-white
                       hover:bg-[#F37584]
                       hover:text-white
                       hover:shadow-[0_0_0_2px_rgba(243,117,132,0.3),0_0_12px_rgba(243,117,132,0.7),0_0_20px_rgba(243,117,132,0.4)]
                       transition-all duration-300">
            {{ $slot ?? 'Button' }}
        </button>
    @endif
</div>