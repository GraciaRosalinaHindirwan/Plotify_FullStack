@extends('layouts/detail')
@section('content')
    <div class="flex backdrop-blur-md border border-white/20 shadow-lg rounded-2xl mx-[80px] py-[32px] px-[80px] flex-col gap-[32px]">
        <div class="gap-[16px] items-center flex flex-col">
            <h1 class="text-[26px] font-bold text-[var(--color-text)]">Modern Building House</h1>
            <h1 class="text-[26px] font-bold text-[var(--color-text)]">Rp.500.000.000,00</h1>
        </div>

        <div class="flex flex-col gap-[24px]">
            <h1 class="text-[20px] text-[var(--color-text)] font-semibold">Dokumen yang diunggah</h1>

            @foreach($documents as $index => $document)
                <div class="flex items-center justify-between p-4">
                    <div class="flex flex-col gap-3">
                        <!-- Title -->
                        <h2 class="text-white text-[24px] font-semibold">
                            {{ $document->document_type }}
                        </h2>
                        
                        <!-- File Card -->
                        <a 
                        href="{{ asset('storage/' . $document->file_path) }}"
                        target="_blank"
                        class="flex items-center gap-3 bg-white px-4 py-3 rounded-lg w-fit hover:scale-105 transition"
                        >
                        <!-- Icon -->
                        <div class="text-black text-[20px]">
                            <i class="fa-solid fa-image"></i>
                        </div>
                        
                        <!-- File Name -->
                        <p class="text-black font-medium">
                            {{ strtoupper(basename($document->document_name)) }}
                            </p>
                        </a>
                    </div>
                    
                    @php 
                    $status = 'pending';
                    @endphp
        
                <!-- Status -->
                <div class="flex items-center gap-4">
                    @include('components.common.negotiation-status', [
                        'type' => $status
                        ])
                            </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection