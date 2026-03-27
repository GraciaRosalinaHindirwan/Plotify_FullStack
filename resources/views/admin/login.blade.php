@extends("layouts/login")
@section("content")
@php
    $fields = [
        ['type' => 'text','name' => 'username', 'label' => 'Username' ],
        ['type' => 'password','name' => 'password', 'label' => 'Password']
    ];
@endphp
<form method="POST">
    @csrf

    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 w-full">
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
