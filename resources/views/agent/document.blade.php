@extends('layouts.agent')

@section('content')
@include('components.common.navbar')
<div class="flex backdrop-blur-md border border-white/20 shadow-lg rounded-2xl mx-[80px] py-[32px] px-[80px] flex-col gap-[32px]">
    <div class="w-full flex flex-col gap-9">
        <h1 class="text-[24px] font-bold text-[var(--color-text)]">Daftar Dokumen</h1>
        <div class="w-full flex flex-col gap-9">
            @foreach ($transactions as $transaction)

            @php
                $allBuyerApproved = $transaction->buyer_document
                    ->every(fn($doc) => $doc->is_approve_agen == 1);

                $allSellerApproved = $transaction->seller_document
                    ->every(fn($doc) => $doc->is_approve_agen == 1);
            @endphp

                @if($transaction->show_status)
                    <article class="bg-[#1E1E1E] flex justify-between items-center px-[16px] py-[16px] rounded-xl">
                        <div class="flex items-center gap-6">
                            <div>
                                <p class="text-[16px] text-[var(--color-text)] pb-[8px]">ID Transaksi: {{ $transaction->id }}</p>
                                <h2 class="text-[24px] font-bold">{{ $transaction->property->name }}</h2>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            @include('components.common.negotiation-status', [
                                'type' => $status
                            ])
                            <a href="{{ route('agent.detailDocument', ['id' => $transaction->id]) }}">
                                <i class="fa-solid fa-angle-right text-[24px]"></i>
                            </a>
                        </div>
                    </article>
                @endif
            @endforeach
        </div>
    </div>
</div>
@endsection