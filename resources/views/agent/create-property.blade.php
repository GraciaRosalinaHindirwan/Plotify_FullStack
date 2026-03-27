@extends('layouts/agent')

@section('content')
    @include("components/common/navbar")

    <main>
        <section class="px-[80px] py-[48px]">
            <div class="py-[60px] px-[80px] border-2 border-[#1E1E1E] rounded-xl">
                <header class="flex flex-col gap-[32px]">
                    <h1 class="text-4xl font-bold">Tambah Properti</h1>
                    <h2 class="text-lg">Tambahkan properti baru untuk dipublikasikan kepada calon pembeli.<br>Lengkapi data properti agar dapat ditampilkan dan dikelola dalam daftar penawaran.</h2>
                </header>

                <section class="pt-6">
                    <ul class="flex flex-col gap-[16px]">
                        <li class="flex flex-col gap-3">
                            <label class="font-bold text-xl" for="">Jenis Properti</label>
                            <input class="border rounded-lg p-3" type="text" name="" value="">
                        </li>
                        <li class="flex flex-col gap-3">
                            <label class="font-bold text-xl" for="">Lokasi Properti</label>
                            <input class="border rounded-lg p-3" type="text" name="" value="">
                        </li>
                        <li class="flex flex-col gap-3">
                            <label class="font-bold text-xl" for="">Harga Properti</label>
                            <input class="border rounded-lg p-3" type="text" name="" value="">
                        </li>
                        <li class="flex flex-col gap-3">
                            <label class="font-bold text-xl" for="">Deskripsi</label>
                            <input class="border rounded-lg p-3" type="text" name="" value="">
                        </li>
                    </ul>

                    <div class="mt-[32px]">
                        <a class="bg-gradient-to-r from-[#0560E8] to-[#7000FF] rounded-lg p-[1px] w-full flex justify-center items-center" href="">
                            <span class="w-full flex justify-center bg-[#1E1E1E] items-center py-4 rounded-lg text-[#F375C2]">Konfirmasi Unggah</span>
                        </a>
                    </div>
                </section>
            </div>
        </section>
    </main>
@endsection
