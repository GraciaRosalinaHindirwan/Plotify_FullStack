@extends('layouts.success')

@section('message')

<div class="self-stretch text-center text-[#EFECE3] text-xl font-normal font-['Balsamiq_Sans'] leading-4">
    Verifikasi Berhasil Diperbarui
</div>

<div class="text-center text-[#EFECE3] text-xl font-normal font-['Balsamiq_Sans'] leading-4 mt-4">
    Status Dokumen:<br><br>
    <span class="font-bold">
        REVISI
    </span>
</div>

@endsection

@section('button')
@include('components/admin/button', [
    'href' => url('/verification'),
    'slot' => 'Kembali ke daftar'
])
@endsection