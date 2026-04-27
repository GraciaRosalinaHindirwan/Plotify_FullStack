@extends("layouts/detail") 

@section("content")
<div class="p-[80px] bg-black">
    
    <div class="flex gap-10 justify-center">

        <div class="w-[500px] bg-[#1E1E1E] border border-[#0E21A0] rounded-2xl p-6 flex flex-col gap-6">
            <div>
                <h2 class="text-2xl font-bold text-[#EFECE3]">Transaksi Langsung</h2>
                <p class="text-sm text-gray-300 mt-2">
                    Dengan memilih transaksi langsung, Anda akan langsung masuk ke tahap pembayaran dan verifikasi dokumen sesuai prosedur yang berlaku.
                </p>
            </div>

            <div class="flex flex-col gap-2 text-[#EFECE3] text-sm">
            <div class="flex items-center gap-2">
                <img src="/img/star-icon.png" class="w-5 h-5">
                <span>Harga transparan & final</span>
            </div>

            <div class="flex items-center gap-2">
                <img src="/img/star-icon.png" class="w-5 h-5">
                <span>Mempercepat legalitas</span>
            </div>

            <div class="flex items-center gap-2">
                <img src="/img/star-icon.png" class="w-5 h-5">
                <span>Proses lebih cepat</span>
            </div>

            <div class="flex items-center gap-2">
                <img src="/img/star-icon.png" class="w-5 h-5">
                <span>Cocok untuk pembeli serius</span>
            </div>

                </div>

            @include("components/admin/button", [
            'type' => 'submit',
            'id' => NULL,
            'slot' => 'Lanjutkan'
            ])
        </div>

        <div class="w-[500px] bg-[#1E1E1E] border border-[#0E21A0] rounded-2xl p-6 flex flex-col gap-6">
            <div>
                <h2 class="text-2xl font-bold text-[#EFECE3]">Transaksi Negosiasi</h2>
                <p class="text-sm text-gray-300 mt-2">
                    Setelah penawaran dikirim, penjual dapat menerima, menolak, atau memberikan penawaran balik.
                </p>
            </div>

            <div class="flex flex-col gap-2 text-[#EFECE3] text-sm">
                <div class="flex flex-col gap-2 text-[#EFECE3] text-sm">
            <div class="flex items-center gap-2">
                <img src="/img/star-icon.png" class="w-5 h-5">
                <span>Fleksibel & transparan</span>
            </div>

            <div class="flex items-center gap-2">
                <img src="/img/star-icon.png" class="w-5 h-5">
                <span>Bisa mendapatkan harga terbaik</span>
            </div>

            <div class="flex items-center gap-2">
                <img src="/img/star-icon.png" class="w-5 h-5">
                <span>Tersedia riwayat negosiasi</span>
            </div>

            <div class="flex items-center gap-2">
                <img src="/img/star-icon.png" class="w-5 h-5">
                <span>Cocok untuk diskusi harga</span>
            </div>

            </div>
            
            <div class="mt-8">
                @include("components/admin/button", [
                'type' => 'submit',
                'id' => NULL,
                'slot' => 'Ajukan Penawaran'
                ])
            </div>
            
        </div>

    </div>

</div>
@endsection