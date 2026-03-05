@extends("layouts/agent")

@section('content')
    <header class="w-full pt-[80px] pb-[64px]">
        <nav class="flex w-full justify-between items-center px-[80px]">
            <img src="/img/Logo.png" alt="Plotify logo">

            <ul class="flex items-center gap-[2rem]">
                <li><a class="font-bold text-xl bg-clip-text text-transparent bg-gradient-to-t from-[#B153D7] via-[#4D2FB2] to-[#0E21A0]" href="">Janji Temu</a></li>
                <li><a class="font-bold text-xl" href="">Permintaan</a></li>
                <li><a class="font-bold text-xl" href="">Publikasi</a></li>
                <li><a class="font-bold text-xl" href="">Dokumen</a></li>
                <li><a class="font-bold text-xl" href="">Penawaran</a></li>
            </ul>
            <div class="size-[50px] bg-[#999] rounded-full flex justify-center items-center">MK</div>
        </nav>
    </header>

    <main>
        <section class="px-[80px]">
            <div class="py-[60px] px-[80px] border-2 border-[#1E1E1E] rounded-xl">
                <h1 class="text-4xl font-bold">Daftar Janji Temu</h1>
                <ul class="pt-[2rem]">
                    <li>
                        <div class="p-[1px] bg-gradient-to-r from-[#0E21A0] via-[#B153D7] to-[#4D2FB2] rounded-xl">
                            <article class="bg-[#1E1E1E] flex justify-between items-center px-[1rem] py-[2rem] rounded-xl">

                                <div>
                                    <h2 class="text-2xl font-bold">Modern Building House</h2>
                                    <h3 class="text-lg mt-1">Siti Nurhaliza</h3>
                                </div>
                                <i class="fa-solid fa-angle-right text-4xl"></i>
                            </article>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </main>
@endsection
