@extends("layouts/property")
@section("content")
<div class="bg-white/10 backdrop-blur-md border border-white/20 shadow-lg rounded-2xl m-[80px] p-[56px] pb-[32px]">
    <div class = "flex flex-col2 place-content-between">
        <div class = "flex flex-col gap-[24px]">
        <p class="text-[18px] text-[var(--color-text)] font-semibold">Nama properti </p>
        <p class="text-[18px] text-[var(--color-text)] font-semibold">Alamat properti </p>
        <p class="text-[18px] text-[var(--color-text)] font-semibold">Harga properti </p>
        <p class="text-[18px] text-[var(--color-text)] font-semibold">Luas properti </p>
        <p class="text-[18px] text-[var(--color-text)] font-semibold">Nama Agent </p>
        <p class="text-[18px] text-[var(--color-text)] font-semibold">Tanggal Pertemuan</p>
        </div>
        <div class = "flex flex-col gap-[24px]">
            <p class="text-[18px] text-[var(--color-text)] font-normal">Modern Boarding House </p>
            <p class="text-[18px] text-[var(--color-text)] font-normal">Jl. Anggrek No. 12, Jakarta Selatan </p>
            <p class="text-[18px] text-[var(--color-text)] font-normal">Rp.500.000.000</p>
            <p class="text-[18px] text-[var(--color-text)] font-normal">120</p>
            <p class="text-[18px] text-[var(--color-text)] font-normal">Budi Santoso</p>
            <p class="text-[18px] text-[var(--color-text)] font-normal">25 April 2026</p>
        </div>
    </div>
    
    <div class="pt-[32px] pb-[16px]">
        @include("components/admin/button", [
            'type' => 'submit',
            'id' => NULL,
            'slot' => 'Buat Janji Temu'
        ])
    </div>
</div>
@endsection