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

             <div class="flex gap-[32px] mt-[40px]">
                <div class="w-[260px]
                p-[24px]
                rounded-[16px]
                relative
                border
                border-transparent
                bg-[#0c0c0c]
                shadow-[0_0_20px_rgba(168,85,247,0.15)]" style="background-image:
                linear-gradient(#0c0c0c,#0c0c0c),
                linear-gradient(135deg,#7c3aed,#ec4899);
                background-origin:border-box;
                background-clip:padding-box,border-box;

                box-shadow:0 0 20px rgba(168,85,247,0.15);">
                    <div class="card-top">
                        <div class="icon-box">
                            <i class="bi bi-people"></i>
                        </div>
                        <span>Total Agen</span>
                    </div>

                    <div class="card-number">
                        124
                    </div>
                </div>

                <div class="card-stat">
                    <div class="card-top">
                        <div class="icon-box">
                            <i class="bi bi-person-badge"></i>
                        </div>
                        <span>Total Notaris</span>
                    </div>
                    <div class="card-number">
                        45
                    </div>
                </div>
            </div>
        </div>

@endsection