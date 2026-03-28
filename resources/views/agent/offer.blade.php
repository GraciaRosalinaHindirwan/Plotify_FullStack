@extends('layouts/agent')

@section('content')
    @include("components/common/navbar")

    <main>
        <section class="px-[80px] py-[48px]">
            <div class="py-[60px] px-[80px] border-2 border-[#1E1E1E] rounded-xl">
                <header class="flex flex-col gap-[32px]">
                    <h1 class="text-4xl font-bold">Daftar Penawaran</h1>
                    <h2 class="text-lg">Pantau penawaran harga yang diajukan oleh pembeli.<br>Setiap penawaran dapat ditinjau dan diproses sebelum transaksi dilanjutkan.</h2>
                </header>

                <section class="pt-6">
                <article>
                    <header class="w-full">
                        <ul class="flex py-4">
                            <li class="w-[10%] text-center text-2xl">ID</li>
                            <li class="w-[30%] text-center text-2xl">Harga</li>
                            <li class="w-[40%] text-center text-2xl">Status</li>
                            <li class="w-[20%] text-center text-2xl">Aksi</li>
                        </ul>
                    </header>
                    <div class="border rounded-lg py-3 mt-3">
                        <ul class="flex items-center">
                            <li class="text-[1rem] w-[10%] text-center">ID</li>
                            <li class="w-[30%] text-center">Harga</li>
                            <li class="w-[40%] text-center">Status</li>
                            <li class="w-[20%] text-center">
                                <a class="bg-gradient-to-r from-[#0560E8] to-[#7000FF] rounded-lg p-[1px] w-full flex justify-center items-center" href="">
                                    <span class="w-full flex justify-center bg-[#1E1E1E] items-center py-4 rounded-lg text-[#F375C2]">Pilih</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </article>
                </section>
            </div>
        </section>
    </main>
@endsection
