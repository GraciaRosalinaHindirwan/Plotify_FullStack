@extends("layouts/agent")

@section("content")
    @include("components/common/navbar")

    <main class="py-8">
        <section class="px-[80px]">
            <ul class="grid grid-cols-3 gap-[80px]">
                @for($i = 0; $i < 10; $i++)
                <li>
                    <article class="p-[1px] rounded-xl bg-gradient-to-r from-[#0560E8] to-[#7000FF]">
                        <div class="gap-3 flex flex-col rounded-xl bg-[var(--color-bg)] p-[10px]">
                            <img src="" alt="gambar" class="aspect-video">
                            <h1 class="font-bold text-lg">Modern boarding house</h1>
                            <p class="mt-2xl">Boarding house modern siap huni dengan konsep kekinian dan fasilitas premium.</p>
                            <h2 class="font-bold text-lg">Mulai dari IDR 55 M</h2>

                            <a class="bg-gradient-to-r from-[#0560E8] to-[#7000FF] rounded-lg p-[1px]" href="">
                                <span class="p-3 flex items-center justify-center bg-[#1E1E1E] rounded-lg">
                                    Lihat Selengkapnya
                                </span>
                            </a>
                        </div>
                    </article>
                </li>
                @endfor
            </ul>
        </section>

        <section class="flex justify-end px-[80px] py-8">
            <a class="size-[64px] bg-gradient-to-r from-[#0E21A0] via-[#B153D7] to-[#4D2FB2] rounded-full flex justify-center items-center" href="">
                <i class="fa-solid fa-plus text-2xl"></i>
            </a>
        </section>
    </main>
@endsection
