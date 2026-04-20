@extends("layouts/property")
@section("content")
@php
    $fields = [
        ['type'=>'text', 'name' => 'property_name', 'label' => 'Nama Properti'],
        ['type' => 'text', 'name' => 'property_address', 'label' => 'Alamat Properti'],
        ['type' => "datetime-local", 'name' => 'actual_time_schedule', 'label' => 'Tanggal Pertemuan' ]
    ];

@endphp
    <form action="{{ route('users.appointmentAction') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="bg-white/10 backdrop-blur-md border border-white/20
            shadow-lg rounded-2xl m-[80px]">
            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 w-full p-[64px]">
                @foreach ($fields as $field)
                  @include("components/admin/field")
                @endforeach
                <div class="flex flex-cols-3 gap-4">
                  @foreach ($regions as $region)
                    @include("components/admin/field-wilayah", [
                      'works' => $region['area'],
                      'wilayah' => $region['wilayah']
                    ])
                  @endforeach
                </div>
                <div class="pt-[32px] pb-[16px]">
                  @include("components/admin/button", [
                    'type' => 'submit',
                    'id' => NULL,
                    'slot' => 'Selanjutnya'
                    ])
                </div>
            </div>
    </div>

  </form>
@endsection
