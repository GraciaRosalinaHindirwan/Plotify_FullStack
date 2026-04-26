@php
function isActive($route) {
    return request()->is($route) 
        ? 'bg-clip-text text-transparent bg-gradient-to-t from-[#B153D7] via-[#4D2FB2] to-[#0E21A0]' 
        : 'class="text-[var(--color-text)] hover:opacity-70"';
}
@endphp

<header class="sticky top-0 w-full pt-[80px] pb-[64px] bg-[var(--color-bg)]">
    <nav class="flex w-full justify-between items-center px-[80px]">
        <img src="/img/Logo.png" alt="Plotify logo">

        <ul class="flex items-center gap-[2rem]">
            <li><a class="font-bold text-xl {{ isActive('agent/appointment') }} transition-all duration-300" href="/agent/appointment">Janji Temu</a></li>
            <li><a class="font-bold text-xl {{ isActive('agent/property') }} transition-all duration-300" href="/agent/property">Property</a></li>
            <li><a class="font-bold text-xl" href="">Publikasi</a></li>
            <li><a class="font-bold text-xl" href="">Dokumen</a></li>
            <li><a class="font-bold text-xl" href="">Penawaran</a></li>
            <li>
                <form method="POST" action="/agent/logout">
                    @csrf
                    <button class="font-bold text-xl cursor-pointer" type="submit">Logout</button>
                </form>
            </li>
        </ul>
        <div class="size-[50px] bg-[#999] rounded-full flex justify-center items-center">MK</div>
    </nav>
</header>
