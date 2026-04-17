@extends("layouts/detail")
@section("content")
<div class="flex backdrop-blur-md border border-white/20 shadow-lg rounded-2xl mx-[80px] py-[32px] px-[80px] flex-col gap-[32px]">
    <h1 class="text-[26px] font-bold text-[var(--color-text)]">Modern Building House</h1>
    <div class = "flex flex-col2 place-content-between">
        <div class = "flex flex-col gap-[24px]">
        <p class="text-[18px] text-[var(--color-text)] font-semibold">Nama properti </p>
        <p class="text-[18px] text-[var(--color-text)] font-semibold">Harga properti </p>
        <p class="text-[18px] text-[var(--color-text)] font-semibold">Nama Pemilik </p>
        <p class="text-[18px] text-[var(--color-text)] font-semibold">Nama Agent </p>
        <p class="text-[18px] text-[var(--color-text)] font-semibold">Harga Negosiasi</p>
        <p class="text-[18px] text-[var(--color-text)] font-semibold">Catatan Negosiasi</p>
        </div>
        <div class = "flex flex-col gap-[24px]">
            <p class="text-[18px] text-[var(--color-text)] font-normal">Modern Boarding House </p>
            <p class="text-[18px] text-[var(--color-text)] font-normal">Rp.500.000.000</p>
            <p class="text-[18px] text-[var(--color-text)] font-normal">Bella Savitri</p>
            <p class="text-[18px] text-[var(--color-text)] font-normal">Budi Santoso</p>
            <p class="text-[18px] text-[var(--color-text)] font-normal">Rp.450.000.000</p>
            <p class="text-[18px] text-[var(--color-text)] font-normal">Pelanggan menawar dengan harga yang lebih rendah.</p>
        </div>
    </div>
    <div class="inline-flex w-fit items-center px-[8px] py-[8px] rounded-[8px] border-2 border-white 
        bg-[var(--color-highlight)] text-[var(--color-text)] font-semibold text-[16px] text-center">
        Disetujui
    </div>
</div>
@endsection