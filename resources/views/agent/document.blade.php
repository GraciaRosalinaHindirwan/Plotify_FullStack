@extends('layouts.agent')

@section('content')

    @include('components.common.navbar', [
        'active' => 'document'
    ])

    <div
        class="w-full max-w-[1120px] mx-auto px-20 py-14 rounded-tr-[20px] rounded-bl-[20px] rounded-br-[20px]
        shadow-[0px_4px_4px_0px_rgba(59,104,255,0.10)]
        shadow-[inset_4px_0px_3px_0px_rgba(59,104,255,0.28)]
        backdrop-blur-[1px]
        flex flex-col gap-8"
    >

        <h1 class="text-[#EFECE3] text-4xl font-bold font-poppins">
            Daftar Dokumen
        </h1>

        <div
            class="w-full px-4 bg-[#1E1E1E] rounded-lg
            shadow-[0px_4px_4px_0px_rgba(0,0,0,0.25)]
            outline outline-1 outline-blue-900
            flex items-center gap-8 overflow-hidden"
        >

            <div class="flex-1 h-24 flex items-center gap-4">
                <div class="flex flex-col justify-center">
                    <p class="text-[#EFECE3] text-base font-medium font-poppins">
                        ID Dokumen: 01
                    </p>

                    <div class="flex items-center gap-4">
                        <h2 class="text-[#EFECE3] text-2xl font-bold font-poppins">
                            Modern Boarding House
                        </h2>
                    </div>
                </div>
            </div>

            <<div class="flex-1 h-full flex justify-end items-center gap-4">

            @include('components.common.negotiation-status', [
            'status' => 'pending'
            ])

        <a href="{{ url('/agent/document-detail') }}">
            <img
                src="{{ asset('img/arrow.png') }}"
                alt="arrow"
            >
        </a>
        </div>

            </div>
        </div>

    </div>
</div>
@endsection