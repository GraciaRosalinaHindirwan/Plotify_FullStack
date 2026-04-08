@extends("layouts/auth")
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
      'slot' => 'Masuk'
    ])
    </div>
</form>

        <center>
            <p class="mt-3" style="color:var(--color-text); font-size: var(--body-sm);">
                Belum punya akun? 
                <a href="register" class="inline-block text-[var(--color-accent)] no-underline transition-all duration-200 transform hover:text-[var(--color-highlight)] hover:-translate-y-[2px] active:-translate-y-[1px]">Daftar di sini</a>
            </p>
        </center>
    </div>
    
@endsection