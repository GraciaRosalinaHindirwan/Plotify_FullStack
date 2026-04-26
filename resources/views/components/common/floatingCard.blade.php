<div id="confirm-modal" 
     class="fixed inset-0 bg-black/70 hidden items-center justify-center z-50">

    <div class="bg-[#1E1E1E] p-8 rounded-xl w-[400px] text-center border border-purple-500">

        <p class="text-white mb-6">
            Apakah yakin ingin mempublikasikan properti?
        </p>

        <div class="flex gap-4">
            <div>
                @include('components.common.button',[
                    'type' => 'button',
                    'id' => 'cancel-btn',
                    'slot' => 'Ubah Data Properti'
                ])
            </div>
            <div>
                @include('components.common.button',[
                    'type' => 'button',
                    'id' => 'confirm-btn',
                    'slot' => 'Konfirmasi Publikasi Properti'
                ])
            </div>
        </div>

    </div>
</div>