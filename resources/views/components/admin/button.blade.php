<div class="p-[2px] rounded-lg bg-gradient-to-r from-pink-500 to-purple-500">
      <button type="{{ $type ?? 'button' }}" 
      id="{{ $id ?? '' }}" 
      class="w-full rounded-lg bg-[var(--color-surface)] px-4 py-2 text-white
       hover:bg-[var(--btn-gradient2)]
    hover:text-white
    hover:shadow-[0_0_0_2px_rgba(243,117,194,0.3),0_0_12px_rgba(243,117,194,0.7),0_0_20px_rgba(243,117,194,0.4)]">
       {{ $slot ?? 'Button' }}
      </button>
</div>
