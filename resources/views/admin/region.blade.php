@extends("layouts/admin")

@section("content")
    <!-- CONTENT -->
    <div class="w-full px-8 py-8">
      @include("components/admin/header")
      @php 
      $fields = [
        ['type' => 'text','name' => 'province', 'label' => 'Nama Provinsi'],
        ['type' => 'text','name' => 'regency', 'label' => 'Nama Kabupaten'],
        ['type' => 'text','name' => 'postal', 'label' => 'Kode Pos'],
        ['type' => 'text','name' => 'district', 'label' => 'Nama Kecamatan'],
       
      ];
      @endphp


{{-- Titlle --}}
<div class="flex items-center gap-[16px] pb-[16px]">
  <img src="/img/formulir.png" alt="" id="dashboard-logo">
  <div>
    <p class="text-[var(--color-text)] font-semibold" style="font-size: var(--h2-size)">Formulir wilayah</p>
  </div>
</div>

{{-- form registration --}}
<form action="" method="POST" enctype="multipart/form-data">
  @csrf
<div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full">
@foreach ($fields as $field)
  @include("components/admin/field")
@endforeach
</div>


<div class="pt-[32px] pb-[16px]">
  @include("components/admin/button", [
      'type' => 'submit',
      'id' => NULL,
      'slot' => 'Submit'
    ])
</div>
    
</form>
@endsection