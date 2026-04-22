<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Reject</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@400;700&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
</head>

<body class="bg-black text-[#EFECE3] font-[Poppins]">

<div class="w-[1280px] p-[80px] flex flex-col gap-[64px] mx-auto">

    <div class="flex justify-between items-center self-stretch">

        <img src="/img/Logo.png" class="w-[116px] h-[60px]" />

        <div class="text-[#EFECE3] text-[45px] font-bold font-[Poppins]">
            Alasan Penolakan
        </div>

        <div class="w-[50px] h-[50px] bg-gray-400 rounded-full flex items-center justify-center text-white text-[10px] font-[Balsamiq_Sans] uppercase tracking-wider">
            MK
        </div>

    </div>

    <div class="w-[1120px] px-[80px] py-[60px] flex flex-col gap-[32px] rounded-[20px]
        border border-[#0E21A0]
        shadow-[inset_4px_0px_3px_rgba(59,104,255,0.28),0px_4px_4px_rgba(59,104,255,0.10)]
        backdrop-blur-[1px]">

        <div class="text-[#EFECE3] text-2xl font-normal font-[Balsamiq_Sans]">
            Alasan Penolakan
        </div>

        <textarea
            class="w-full bg-[#1A1A1A] border border-[#0E21A0] rounded-[4px] p-4 text-[#EFECE3] text-base font-normal font-[Balsamiq_Sans] leading-6 outline-none resize-none"
            rows="4"
            placeholder="Masukkan alasan penolakan..."
        ></textarea>
    

        <div class="w-full flex justify-center">
            @include('components/admin/button', [
                'href' => '/notary/verification-reject',
                'slot' => 'Kirim'
            ])
        </div>

    </div>

</div>

</body>
</html>