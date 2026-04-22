@extends('layouts.success')

@section('message')
File berhasil diunggah
@endsection

@section('button')
@include('components/admin/button', [
    'href' => url('/menu'),
    'slot' => 'Kembali ke MENU'
])
@endsection