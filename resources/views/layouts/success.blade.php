<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Page</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@400;700&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
</head>

<body class="bg-black">

<div class="w-[1280px] p-[80px] flex flex-col justify-center items-start bg-black mx-auto">


    <div class="flex flex-col items-start gap-[16px] self-stretch">
        <img src="/img/Logo.png" class="w-[116px] h-[60px]" />
    </div>

    <div class="flex flex-col items-center justify-center self-stretch h-[778px] gap-[20px]">

        <img src="/img/success.png"
             class="w-[204px] h-[204px] object-contain" />

        <!-- text  -->
        <div class="text-[#EFECE3] text-xl font-normal font-['Balsamiq_Sans'] text-center">
            @yield('message')
        </div>

        <!-- button -->
       
            @yield('button')

        </div>

    </div>

</div>

</body>
</html>