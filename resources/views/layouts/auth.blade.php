<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication Page</title>
    
    <!-- Link -->
   @vite('resources/css/design-system.css')

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
</head>

<body class="min-h-screen flex items-center bg-[var(--color-bg)] font-[Poppins]">
<div class ="flex px-[80px] py-[10px] justify-between w-screen min-h-screen {{ $isReverse ? 'flex-row-reverse' : '' }}">
    <div class="flex-1 min-h-screen max-w-[500px] flex flex-col justify-between p-4 items-start sticky top-0 self-start ">
        <h1 class="text-[32px] font-semibold mb-[10px]" style="color: var(--color-text);">{{ $sideTitle }}</h1>
        <h1 class="text-[22px] text-[var(--color-text)] mb-[30px]">{{ $sideSubTitle }}</h1>
    </div>

    <div class="w-[500px] p-10 rounded-[20px]
        bg-white/15 backdrop-blur-[15px]
        border-transparent
        shadow-[0_8px_32px_rgba(0,0,0,0.2)]"
        style="border: 1px solid var(--color-accent);">

        <h1 class="text-[32px] font-semibold
        mb-[10px]" style=" color: var(--color-text);">{{ $title }}</h1>
        <p class="text-[var(--body-sm)] text-[var(--color-text)] mb-[30px]">{{ $subtitle}}</p>
        @if(session()->has("loginStatus"))
            <p class="text-red-600">{{ session("loginStatus") }}</p>
        @endif

    @yield("content")
    </div>
</div>
</body>
</html>