@extends("layouts/agent")

@section("content")
    @include("components/common/navbar")

    <main class="py-8">
        <form action="{{ route("agent.property") }}" method="get">
        @csrf
            <div class="flex w-full items-center px-[80px]">
                @include('components/common/search')
            </div>
            @if ($search)
                <div class="px-6 md:px-20 mt-4">
                    <p class="text-gray-600">Hasil pencarian untuk: "{{ $search }}", <a href="{{ route('agent.property') }}" class="text-blue-500 hover:underline">Lihat semua properti</a></p>
                </div>
            @endif
        </form>

        <section class="px-[80px] mt-[24px]">
            <ul class="grid grid-cols-3 gap-[80px] ">
                @foreach($properties as $property)
                <li>
                    <article class=" p-[1px] rounded-xl bg-gradient-to-r from-[#0560E8] to-[#7000FF]">
                        <div class="gap-3 flex flex-col rounded-xl bg-[var(--color-bg)] p-[10px]">
                            <img src="{{ asset($property->property_image->first()->url) }}" alt="gambar" class="aspect-video">
                            <h1 class="font-bold text-lg">{{ $property->name }}</h1>
                            <p class="mt-2xl">{{ Str::limit($property->description, 100) }}</p>

                            <div class="grid grid-cols-2 place-content-between gap-[16px]">
                                @include("components/common/button",[ 
                                    'href' => " ", 
                                    'id' => " ", 
                                    'slot' => "Hapus", 
                                    ]) 
                                @include("components/common/button",[
                                     'href' => 'agent/property', 
                                     'id' => " ", 
                                     'slot' => "Edit", 
                                     ])
                            </div>
                        </div>
                    </article>
                </li>
                @endforeach
            </ul>
        </section>

        <section class="flex justify-end px-[80px] py-8">
            <a class="size-[64px] bg-gradient-to-r from-[#0E21A0] via-[#B153D7] to-[#4D2FB2] rounded-full flex justify-center items-center" href="">
                <i class="fa-solid fa-plus text-2xl"></i>
            </a>
        </section>
    </main>
@endsection
