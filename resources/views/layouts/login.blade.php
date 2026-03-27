<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-admin Page</title>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">

    <!-- Link -->
    @vite('resources/css/design-system.css')
</head>
<body class="min-h-screen flex items-center justify-center bg-[var(--color-bg)] font-[Poppins]">
    <div class="w-[400px] p-10 rounded-[20px] 
    bg-white/15 backdrop-blur-[15px] 
    border-transparent
    shadow-[0_8px_32px_rgba(0,0,0,0.2)]"
    style="border: 1px solid var(--color-accent);">
    <h1 class="text-[32px] font-semibold
    mb-[10px]" style=" color: var(--color-text);">{{ $title }}</h1>
    <p class="text-[var(--body-sm)] text-[var(--color-text)] mb-[30px]">{{ $subtitle}}</p>
    @yield("content")
    </div>
</body>