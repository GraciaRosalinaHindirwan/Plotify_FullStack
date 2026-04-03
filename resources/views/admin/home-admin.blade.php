@extends("layouts/admin")

@section("content")
        <!--content-->
        <div class="w-full px-6 py-4">
            @include("components/admin/header")

            <div class="flex items-center gap-[12px]">
                <img src="/img/dashboard.png" alt="" class="size-[50px]">
                <div>
                    <p class="text-[var(--color-text)] font-semibold" style="font-size: var(--h2-size)">Dashboard Overview</p>
                    <p class="text-[var(--color-text)]" style="font-size: var(--caption)">Ringkasan data sistem platform properti</p>                </div>
                </div>
                
                @foreach ($stat as $stat)
                    @include("components/admin/summary-card")
                @endforeach
             

            </div>
        </div>

@endsection