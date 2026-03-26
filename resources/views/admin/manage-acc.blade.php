@extends("layouts/admin")

@section("content")
    <!-- CONTENT -->
    <div class="w-full px-8 py-8">
      @include("components/admin/header")
      @php 
      $fields = [
        ['type' => 'text','name' => 'namaLengkap', 'label' => 'Nama Lengkap'],
        ['type' => 'email', 'name' => 'email', 'label' => 'email'],
        ['type' => 'text', 'name' => 'noTelp', 'label' => 'Nomor Telepon'],
        ['type' => 'text', 'name' => 'username', 'label' => 'username'],
        ['type' => 'password', 'name' => 'password', 'label' => 'password'],
      ];
      @endphp


{{-- Titlle --}}
<div class="flex items-center gap-[16px] pb-[16px]">
  <img src="/img/formulir.png" alt="" id="dashboard-logo">
  <div>
    <p class="text-[var(--color-text)] font-semibold" style="font-size: var(--h2-size)">Formulir Registrasi Akun</p>
  </div>
</div>

{{-- form registration --}}
<form action="" method="POST">
<div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full">
@foreach ($fields as $field)
  @include("components/admin/field")
@endforeach
@include("components/admin/field-dropdown")
</div>

{{-- Titlle --}}
<div class="flex items-center gap-[16px] pt-[32px] pb-[16px]">
  <img src="/img/profile.png" alt="" id="dashboard-logo">
  <div>
    <p class="text-[var(--color-text)] font-semibold" style="font-size: var(--h2-size)">Upload Foto Profil</p>
  </div>
</div>

@include("components/admin/uploadImg")

{{-- Titlle --}}
<div class="flex items-center gap-[16px] pt-[32px] pb-[16px]">
  <img src="/img/profile.png" alt="" id="dashboard-logo">
  <div>
    <p class="text-[var(--color-text)] font-semibold" style="font-size: var(--h2-size)">Wilayah kerja</p>
  </div>
</div>

@include("components/admin/field-wilayah")
<div class="pt-[32px] pb-[16px]">
  @include("components/admin/button", [
      'type' => 'submit',
      'id' => NULL,
      'slot' => 'Submit'
    ])
</div>
    
</form>
@endsection