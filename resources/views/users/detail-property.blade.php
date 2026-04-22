@extends('layouts/detail')
@section("content")
<div class="flex flex-cols2 content-between gap-[24px] mx-[80px] my-[24px] items-center">
    <img src="/img/property1.png" alt="" class="w-[500px] h-[350px]">
    <div class="gap-[16px]">
        <div class="flex flex-col gap-[16px]">
            <span class="inline-block w-fit px-[8px] py-[8px] border-2 rounded-[8px] text-[var(--color-text)] font-semibold border-transparent"
            style="background: linear-gradient(var(--color-surface)) padding-box, 
            var(--btn-gradient2) border-box">
                Tersedia
            </span>
            <h1 class="text-[var(--color-text)] font-bold text-[32px]">Modern Boarding House</h1>
        </div>
        <p class="text-[var(--color-text)] font-normal text-[24px]">Location</p>
        <p class="text-[var(--color-text)] font-semibold text-[24px]">Harga</p>
    </div>
</div>

{{-- buat gambar yang kecil kecil --}}
<div class="mx-[80px] flex flex-row gap-[24px] overflow-x-auto scrollbar-hide">
    <img src="/img/property.jpg" alt="" class="w-[240px] h-[200px]">
    <img src="/img/property.jpg" alt="" class="w-[240px] h-[200px]">
    <img src="/img/property.jpg" alt="" class="w-[240px] h-[200px]">
    <img src="/img/property.jpg" alt="" class="w-[240px] h-[200px]">
    <img src="/img/property.jpg" alt="" class="w-[240px] h-[200px]">
    <img src="/img/property.jpg" alt="" class="w-[240px] h-[200px]">
</div>

<div class="flex justify-between mx-[80px] my-[24px] pb-[250px]">
    <div class="flex flex-col gap-[16px]">
        <h1 class="text-[var(--color-text)] font-bold text-[24px]">Spesifikasi</h1>
        <div class="flex flex-row gap-[8px]">
            <img src="/img/star-icon.png" alt="" class="w-[20px] aspect-square">
            <p class="text-[var(--color-text)] font-normal text-[18px]">701 sqm land area (SHM)</p>
        </div>
        <div class="flex flex-row gap-[8px]">
            <img src="/img/star-icon.png" alt="" class="w-[20px] aspect-square">
            <p class="text-[var(--color-text)] font-normal text-[18px]">500 meters to MRT stasiun Haji Nawi & Cipete</p>
        </div>
    </div>
    <div class="flex flex-col gap-[16px]">
        <h1 class="text-[var(--color-text)] font-bold text-[24px]">Fasilitas</h1>
        <div class="flex flex-row gap-[8px]">
            <img src="/img/feather-icon.png" alt="" class="w-[20px] aspect-square">
            <p class="text-[var(--color-text)] font-normal text-[18px]">Hight speed Wifi Business channel</p>
        </div>
        <div class="flex flex-row gap-[8px]">
            <img src="/img/feather-icon.png" alt="" class="w-[20px] aspect-square">
            <p class="text-[var(--color-text)] font-normal text-[18px]">Swimming Pool+Bathroom</p>
        </div>
    </div>
</div>
@include("components.users.floatingCardAgent")
@endsection