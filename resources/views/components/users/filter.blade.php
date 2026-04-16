<div class="relative w-full">
{{-- button --}}
    <button id="filterBtn" onclick="toggleFilter()" 
    class="flex items-center gap-2 mt-4 p-[18px] 
    border border-[var(--color-primary)] 
    rounded-lg text-white hover:bg-white/10 transition">
        Filters
        <i class="fa-solid fa-sliders"></i>
    </button>

    <div id="filterDropdown" 
    class="hidden absolute mt-2 right-0 w-[220px] 
    bg-[#1a1a1a] border border-[var(--color-primary)] 
    rounded-xl p-4 shadow-lg z-50">

        <form method="GET" action="#">
            
            <select name="location" 
            class="w-full p-2 rounded bg-black text-white mb-3 outline-none">
                <option value="Bantul">Bantul</option>
                <option value="Sleman">Sleman</option>
                <option value="Gunung Kidul">Gunung Kidul</option>
                <option value="Jakarta">Jakarta</option>
            </select>

            <button type="submit" 
            class="w-full py-2 rounded text-white"
            style="background: var(--btn-gradient2);">
                Apply
            </button>

        </form>

    </div>

</div>
<script>
function toggleFilter() {
    document.getElementById('filterDropdown').classList.toggle('hidden');
}

document.addEventListener('click', function(e) {
    const dropdown = document.getElementById('filterDropdown');
    const button = document.getElementById('filterBtn');

    if (!button.contains(e.target) && !dropdown.contains(e.target)) {
        dropdown.classList.add('hidden');
    }
});
</script>