@extends("layouts/detail")
@section('content')
{{-- @foreach($transactions as $transaction) --}}
    <div class="flex backdrop-blur-md border border-white/20 shadow-lg rounded-2xl mx-[80px] py-[32px] px-[80px] flex-col gap-[32px]">
        <h1 class="text-[26px] font-bold text-[var(--color-text)]">Modern Building House</h1>
        <div class = "flex flex-col2 place-content-between">
            <div class = "flex flex-col gap-[24px]">
            <p class="text-[18px] text-[var(--color-text)] font-semibold">Nama properti </p>
            <p class="text-[18px] text-[var(--color-text)] font-semibold">Harga properti </p>
            <p class="text-[18px] text-[var(--color-text)] font-semibold">Alamat properti </p>
            <p class="text-[18px] text-[var(--color-text)] font-semibold">Tanggal terjual </p>
            </div>
            <div class = "flex flex-col gap-[24px]">
                <p class="text-[18px] text-[var(--color-text)] font-normal">{{ $transaction->property->name }}</p>
                <p class="text-[18px] text-[var(--color-text)] font-normal">Rp {{ number_format($transaction->deal_price, 0, ',', '.') }}</p>
                <p class="text-[18px] text-[var(--color-text)] font-normal">{{ $transaction->property->address }}</p>
                <p class="text-[18px] text-[var(--color-text)] font-normal">{{ $transaction->property->sold_date }}</p>
            </div>
        </div>

        @include("components.common.button", [
            'href' => $transaction->buyer_document_count >= 3 
            ? route("users.detailDocument", ["id" => $transaction->id])
            : route("users.addDocument", ["id" => $transaction->id]),

            'slot' => $transaction->buyer_document_count >= 3 
            ? 'Detail Dokumen'
            : 'Unggah Dokumen'
        ])
    </div>
{{-- @endforeach --}}
@endsection