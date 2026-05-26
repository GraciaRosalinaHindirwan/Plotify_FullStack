@extends('layouts.users')
@section('content')
<div class="flex backdrop-blur-md border border-white/20 shadow-lg rounded-2xl mx-[80px] py-[32px] px-[80px] flex-col gap-[32px]">
    <div class="w-full flex flex-col gap-9">
        <h1 class="text-[24px] font-bold text-[var(--color-text)]">Daftar Dokumen</h1>
        <div class="w-full flex flex-col gap-9">
        @foreach($transactions as $transaction)
            @if($transaction->buyer_document_count == 3 && 
                $transaction->is_approve_agen == NULL)
                <article class="bg-[#1E1E1E] flex justify-between items-center px-[16px] py-[16px] rounded-xl">
                    <div class="flex items-center gap-6">
                        <div>
                            <p class="text-[16px] text-[var(--color-text)]">ID Dokumen: {{ $transaction->id }}</p>
                            <h2 class="text-[24px] font-bold">Nama Rumah: {{ $transaction->property->name }}</h2>
                        </div>
                    </div>
                    @if($transaction->seller_document_count == 5)
                        <div class="flex items-center gap-4">
                            <a href="{{ route('users.detailDocument', ['id' => $transaction->id]) }}">
                                <i class="fa-solid fa-angle-right text-[24px]"></i>
                            </a>
                        </div>
                    @else 
                        <div class="flex items-center gap-4">
                            <a href="{{ route('users.addDocumentSeller', ['id' => $transaction->id]) }}">
                                <i class="fa-solid fa-angle-right text-[24px]"></i>
                            </a>
                        </div>
                    @endif
                </article>
                @endif
            @endforeach
        </div>
    </div>
</div>
@endsection