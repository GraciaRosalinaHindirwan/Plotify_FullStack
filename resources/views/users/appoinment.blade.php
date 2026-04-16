@extends("layouts/property")
@section("content")
@php 
    $fields = [
        ['type' => 'text','name' => 'name', 'label' => 'Nama Properti' ],
        ['type' => 'text','name' => 'address', 'label' => 'Alamat Properti' ],
        ['type' => "datetime-local", 'name' => 'actual_time_schedule', 'label' => 'Tanggal Pertemuan' ] 
    ];
@endphp
    <form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="bg-white/10 backdrop-blur-md border border-white/20 
            shadow-lg rounded-2xl m-[80px]">
            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 w-full p-[64px]">
              @foreach ($fields as $field)
                @include("components/admin/field")
              @endforeach
                <div class="pt-[32px] pb-[16px]">
                    @include("components/admin/button", [
                        'type' => 'submit',
                        'id' => NULL,
                        'slot' => 'Submit'
                        ])
                </div>
            </div>
    </div>
    
  </form>
@endsection