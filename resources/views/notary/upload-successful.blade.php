@extends('layouts.success')

@section('message')
File berhasil diunggah
@endsection

@section('button')
@include('components/common/button', [
    'href' => url('/notary/verification'),
    'slot' => 'Kembali ke MENU'
])
@endsection