<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notary</title>

    <!-- font -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
    >

    @vite('resources/css/design-system.css')
    @vite('resources/css/admin.css')
</head>

<body class="bg-[var(--color-bg)] text-[var(--color-text)] font-[Poppins]">

<header class="w-full flex justify-center">
    <div class="flex w-[1280px] px-[80px] pt-[80px] pb-[64px] justify-between items-center">
        <img src="/img/Logo.png" class="w-[116px] h-[60px]" />
        <div class="flex items-center gap-8">
            <a href="verification" class="text-xl font-bold text-[#B153D7]">Dokumen</a>
            <a href="add-AJB" class="text-xl font-bold text-[var(--color-text)]">Akta Jual Beli</a>
        </div>
        <div class="w-[50px] h-[50px] bg-[#999] rounded-full flex items-center justify-center text-white text-[10px] tracking-widest">
            MK
        </div>

    </div>
</header>

    <main class="px-[80px] pb-[80px] flex flex-col gap-[64px]">
        @yield("content")
    </main>

    @stack("scripts")
</body>
</html>