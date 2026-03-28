@extends('layouts/agent')

@section('content')
    @include("components/common/property-navbar")

    <main class="pb-[2rem]">
        <section class="px-[80px]">
            <div class="w-full flex justify-center items-center">
                <img src="" alt="gambar" class="aspect-video w-[350px]">
            </div>
            <ul class="flex flex-col gap-[32px]">
                <li class="flex flex-col gap-[8px]">
                    <h2 class="font-bold text-2xl">Nama Properti</h2>
                    <h3 class="font-medium text-2xl">Modern Boarding House</h3>
                </li>
                <li class="flex flex-col gap-[8px]">
                    <h2 class="font-bold text-2xl">Lokasi Properti</h2>
                    <h3 class="font-medium text-2xl">Jakarta Selatan</h3>
                </li>
                <li class="flex flex-col gap-[8px]">
                    <h2 class="font-bold text-2xl">Harga Properti</h2>
                    <h3 class="font-medium text-2xl">Rp5.000.000,00</h3>
                </li>
                <li class="flex flex-col gap-[8px]">
                    <h2 class="font-bold text-2xl">Luas Properti</h2>
                    <h3 class="font-medium text-2xl">701 Sqm</h3>
                </li>
                <li class="flex flex-col gap-[8px]">
                    <h2 class="font-bold text-2xl">Spesifikasi Properti</h2>
                    <ul class="flex flex-col gap-[8px]">
                        <li class="flex gap-[8px]">
                            <img src="/img/star-icon.png" alt="star icon" />
                            <p class="font-medium text-2xl">4 floor</p>
                        </li>
                        <li class="flex gap-[8px]">
                            <img src="/img/star-icon.png" alt="star icon" />
                            <p class="font-medium text-2xl">500 meters to MRT stasiun Haji Nawi & Cipete</p>
                        </li>
                        <li class="flex gap-[8px]">
                            <img src="/img/star-icon.png" alt="star icon" />
                            <p class="font-medium text-2xl">30-40 meters to Jalan Raya Fatmawati</p>
                        </li>
                        <li class="flex gap-[8px]">
                            <img src="/img/star-icon.png" alt="star icon" />
                            <p class="font-medium text-2xl">Full furnish</p>
                        </li>
                    </ul>
                </li>
                <li class="flex flex-col gap-[8px]">
                    <h2 class="font-bold text-2xl">Fasilitas Properti</h2>
                    <ul class="flex flex-col gap-[8px]">
                        <li class="flex gap-[8px]">
                            <img src="/img/feather-icon.png" alt="star icon" />
                            <p class="font-medium text-2xl">4 floor</p>
                        </li>
                        <li class="flex gap-[8px]">
                            <img src="/img/feather-icon.png" alt="star icon" />
                            <p class="font-medium text-2xl">500 meters to MRT stasiun Haji Nawi & Cipete</p>
                        </li>
                        <li class="flex gap-[8px]">
                            <img src="/img/feather-icon.png" alt="star icon" />
                            <p class="font-medium text-2xl">30-40 meters to Jalan Raya Fatmawati</p>
                        </li>
                        <li class="flex gap-[8px]">
                            <img src="/img/feather-icon.png" alt="star icon" />
                            <p class="font-medium text-2xl">Full furnish</p>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="pt-[32px]">
                <a class="bg-gradient-to-r from-[#0560E8] to-[#7000FF] rounded-lg p-[1px] w-full flex justify-center items-center" href="">
                    <span class="w-full flex justify-center bg-[#1E1E1E] items-center py-4 rounded-lg text-[#F375C2]">Edit data properti</span>
                </a>
            </div>
        </section>
    </main>
@endsection
