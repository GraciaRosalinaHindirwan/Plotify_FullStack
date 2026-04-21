@extends("layouts/detail")
@section("content")
<div class="flex backdrop-blur-md border border-white/20 shadow-lg rounded-2xl mx-[80px] py-[32px] px-[80px] flex-col gap-[32px]">
    <h1 class="text-[26px] font-bold text-[var(--color-text)]">Detail Pertemuan</h1>
    <div class = "flex flex-col3 place-content-between">
        <div class="flex flex-col gap-[8px]">
             <p class="text-[18px] text-[var(--color-text)] font-semibold">Nama properti </p>
             <p class="text-[18px] text-[var(--color-text)] font-normal">{{ $appoinment->property_name }}</p>
        </div>
        <div class="flex flex-col gap-[8px]">
             <p class="text-[18px] text-[var(--color-text)] font-semibold">Nama Agen </p>
             <p class="text-[18px] text-[var(--color-text)] font-normal">{{ $appoinment->agent->user->fullname }}</p>
        </div>
        <div class="flex flex-col gap-[8px]">
             <p class="text-[18px] text-[var(--color-text)] font-semibold">Nama pemilik </p>
             <p class="text-[18px] text-[var(--color-text)] font-normal">{{ $appoinment->seller->fullname }}</p>
        </div>
    </div>
    <div class = "flex flex-col3 place-content-between">
        <div class="flex flex-col gap-[8px]">
             <p class="text-[18px] text-[var(--color-text)] font-semibold">Alamat properti </p>
             <p class="text-[18px] text-[var(--color-text)] font-normal">{{ $appoinment->property_address }}</p>
        </div>
        <div class="flex flex-col gap-[8px]">
             <p class="text-[18px] text-[var(--color-text)] font-semibold">Kecamatan </p>
             <p class="text-[18px] text-[var(--color-text)] font-normal">{{ $appoinment->district->name }} </p>
        </div>
        <div class="flex flex-col gap-[8px]">
             <p class="text-[18px] text-[var(--color-text)] font-semibold">waktu temu </p>
             <p class="text-[18px] text-[var(--color-text)] font-normal">{{ $appoinment->actual_time_schedule ?? 'No schedule set' }} </p>
             @if($appoinment->actual_time_schedule == null && $appoinment->appoinment_schedules[0]->is_agen_approve_schedule == null)
                <p class="text-[18px] text-[var(--color-text)] font-normal">Ajuan anda {{ $appoinment->appoinment_schedules[0]->schedule }}</p>
                <p class="text-[18px] text-[var(--color-text)] font-normal">Menunggu Persetujuan Agen</p>
             @endif
        </div>
    </div>
    @if($appoinment->is_approved_by_agen)
        @include('components.users.badge', ['status' => 'Disetujui'])
    @elseif($appoinment->is_approved_by_agen == null)
        @include('components.users.badge', ['status' => 'Belum diproses'])
    @else
        @include('components.users.badge', ['status' => 'Ditolak'])
    @endif
</div>

@if($appoinment->is_approved_by_agen && $appoinment->actual_time_schedule != null && $appoinment->appoinment_schedules[0]->is_seller_approve_schedule == null)
<section class="px-[80px] pt-[1rem]">
    <ul class="flex gap-2">
        <li class="flex-1">
            <form action="{{ route('users.appoinmentDetailPost', ['id' => $appoinment->id])}}" method="post">
                <input type="hidden" name="status" value="0">
                @csrf
                @include('components.common.button', [
                    'type' => 'submit',
                    'id' => '#',
                    'slot' => 'Tolak janji temu',
                ]);
                </form>
                </li>

                <li class="flex-1">
                <form action="{{ route('users.appoinmentDetailPost', ['id' => $appoinment->id])}}" method="post">
                <input type="hidden" name="status" value="1">
                @csrf
                @include('components.common.button', [
                    'type' => 'submit',
                    'id' => '#',
                    'slot' => 'Setujui janji temu',
                ]);
                </form>
                </li>
            </ul>
        </section>
@endif
@endsection