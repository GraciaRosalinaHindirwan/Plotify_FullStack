@extends("layouts/property")
@section("content")
@php
    $fields = [
        ['type' => "datetime-local", 'name' => 'actual_time_schedule', 'label' => 'Tanggal Pertemuan' ]
    ];
@endphp
    <form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="bg-white/10 backdrop-blur-md border border-white/20
            shadow-lg rounded-2xl m-[80px]">
            <div class="grid grid-cols-1 md:grid-cols-1 gap-4 w-full p-[64px]">
              <form action="{{ route('users.appointmentAction') }}" method="POST">
                @csrf
                @foreach ($fields as $field)
                @include("components/admin/field")
                @endforeach
                <div class="pt-[32px] pb-[16px]">
                  @include("components/admin/button", [
                    'type' => 'submit',
                    'id' => NULL,
                    'slot' => 'Selanjutnya'
                    ])
                </div>
              </form>
            </div>
    </div>

  </form>
@endsection
