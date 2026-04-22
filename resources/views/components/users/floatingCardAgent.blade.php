<div class="fixed bottom-[24px] left-[80px] transition-all duration-500 translate-y-10 opacity-0 
w-[450px] bg-[#1E1E1E] rounded-[16px] p-6 shadow-xl z-50 border border-gray-700" id="ctaCard">
    
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-4">
            
            <!-- avatar -->
            <div class="w-[50px] h-[50px] rounded-full text-[var(--color-text)] flex items-center justify-center font-semibold"
            style="background: var(--btn-gradient-logo);">
                RP
            </div>

            <!-- text -->
            <div>
                <h2 class="text-white font-bold text-lg">Rizky Pratama</h2>
                <p class="text-gray-300">0812-3456-7890</p>
                <p class="text-gray-400 text-sm">Jakarta Selatan & Depok</p>
            </div>
        </div>

        <!-- logo -->
        <img src="/img/logo.png" alt="" class="w-[100px] h-[60px]">
       
    </div>

    <!-- divider -->
    <div class="my-4 h-[2px] opacity-80" style="background: var(--btn-gradient2)"></div>

    <!-- button -->
    @include('components.common.button',[
        'type' => 'submit',
        'id' => '#',
        'slot' => 'Beli Sekarang'
    ])
</div>
<script>
let shown = false;
const card = document.getElementById('ctaCard');

window.addEventListener('scroll', function () {
    if (window.scrollY > 200) {
        card.classList.remove('translate-y-10', 'opacity-0');
        card.classList.add('translate-y-0', 'opacity-100');
        shown = true;
    }
});
</script>