<div class="relative">
     <span class="absolute left-3 top-1 text-sm bg-[var(--color-surface)] px-1 text-[var(--color-text)]">
    Role
  </span>
    <select 
      name="role"
      class="w-full border border-transparent rounded-lg 
      h-[61.33px] px-[12px] pt-6 pb-2 pr-10 appearance-none
      outline-none focus:border-pink-500 text-[var(--color-text)]
      focus:shadow-[0_0_0_2px_rgba(243,117,194,0.3),0_0_12px_rgba(243,117,194,0.7),0_0_20px_rgba(243,117,194,0.4)]" 
      style="background: linear-gradient(var(--color-surface)) padding-box,var(--btn-gradient2) border-box ;"
    >
      <option value="" class="bg">Pilih Role</option>
      <option value="agent" {{ old('role') == 'agen' ? 'selected' : '' }}>Agen</option>
      <option value="notary" {{ old('role') == 'notaris' ? 'selected' : '' }}>Notaris</option>
    </select>
     <img 
    src="/img/drop-down.png" 
    class="absolute right-4 top-1/2 -translate-y-1/2 w-4 h-4 pointer-events-none"
  >
</div>