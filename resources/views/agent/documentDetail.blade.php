@extends('layouts.detail')
@section('content')
<div class="flex backdrop-blur-md border border-white/20 shadow-lg rounded-2xl mx-[80px] py-[32px] px-[80px] flex-col gap-[32px]">
    <div class="self-stretch text-center text-[var(--color-text)] text-[36px] font-bold">
        {{ $transaction->property->name }}
    </div>
    <h1 class="text-[24px] font-bold text-[var(--color-text)]">Dokumen Pembeli</h1>
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
     @endif
    @foreach($buyerDocuments as $document)
    <div class="self-stretch flex items-center gap-6 w-full">
        <div class="w-[180px] shrink-0">
            <h2 class="text-white text-[16px] font-semibold">
                {{ $document->document_type }}
            </h2>
        </div>

        <a 
            href="{{ asset('storage/' . $document->file_path) }}"
            target="_blank"
            class="w-full flex items-center gap-3 bg-white px-4 py-3 rounded-lg w-fit hover:scale-105 transition"
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
        @if($document->is_approve_agen === null)
            <form action="{{ route('agent.documentStatus', $document->id) }}" method="post">
            @csrf
            <input type="hidden" value="buyer" name="document_owner">
                <div class="flex justify-start items-start gap-2">
                    @include('components.common.button', [
                        'type' => 'submit',
                        'slot' => 'Setuju',
                        'value' => 'setuju',
                        'name' => 'status'
                    ])
        
                    @include('components.common.errorBtn', [
                        'type' => 'submit',
                        'slot' => 'Tolak',
                        'value' => 'tolak',
                        'name' => 'status'
                    ])
                </div>
            </form>
        @elseif($document->is_approve_agen == 1)
            <div class="px-[24px] py-[8px] bg-[var(--color-highlight)] text-white font-semibold rounded-lg border-2 border-[#EFECE3]">
                Setuju
            </div>
        @else
            <div class="px-[24px] py-[8px] bg-[var(--color-accent)] text-white font-semibold rounded-lg border-2 border-[#EFECE3]">
                Tolak
            </div>
        @endif
    </div>
    @endforeach

    <h1 class="text-[24px] font-bold text-[var(--color-text)]">Dokumen Penjual</h1>
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
     @endif
    @foreach($sellerDocuments as $document)
    <div class="self-stretch flex items-center gap-6 w-full">
        <div class="w-[180px] shrink-0">
            <h2 class="text-white text-[16px] font-semibold">
                {{ $document->document_type }}
            </h2>
        </div>

        <a 
            href="{{ asset('storage/' . $document->file_path) }}"
            target="_blank"
            class="w-full flex items-center gap-3 bg-white px-4 py-3 rounded-lg w-fit hover:scale-105 transition"
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
        @if($document->is_approve_agen === null)
            <form action="{{ route('agent.documentStatus', $document->id) }}" method="post">
            @csrf
            <input type="hidden" value="seller" name="document_owner">
                <div class="flex justify-start items-start gap-2">
                    @include('components.common.button', [
                        'type' => 'submit',
                        'slot' => 'Setuju',
                        'value' => 'setuju',
                        'name' => 'status'
                    ])
        
                    @include('components.common.errorBtn', [
                        'type' => 'submit',
                        'slot' => 'Tolak',
                        'value' => 'tolak',
                        'name' => 'status'
                    ])
                </div>
            </form>
        @elseif($document->is_approve_agen == 1)
            <div class="px-[24px] py-[8px] bg-[var(--color-highlight)] text-white font-semibold rounded-lg border-2 border-[#EFECE3]">
                Setuju
            </div>
        @else
            <div class="px-[24px] py-[8px] bg-[var(--color-accent)] text-white font-semibold rounded-lg border-2 border-[#EFECE3]">
                Tolak
            </div>  
        @endif
    </div>
    @endforeach
</div>
@endsection
