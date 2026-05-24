<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Dokumen</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
</head>

<body class="bg-black text-[#EFECE3] font-[Poppins]">

<div class="w-[1280px] p-20 flex flex-col justify-center items-start gap-16 overflow-hidden mx-auto">

    <div class="self-stretch flex flex-col justify-start items-start gap-4">
        <div class="self-stretch flex justify-between items-center">

            <a href="/agent/document-detail" class="flex justify-start items-center gap-8">
                <img src="{{ asset('img/arrow.png') }}" alt="Back" class="w-3 h-6 rotate-180">
            </a>

            <div class="text-[#EFECE3] text-5xl font-bold">
                Detail Dokumen
            </div>

            <div class="w-12 h-12 relative">
                <div class="w-12 h-12 absolute bg-zinc-400 rounded-full"></div>

                <div class="absolute inset-0 flex items-center justify-center text-white text-[10px] uppercase tracking-wider">
                    MK
                </div>
            </div>

        </div>
    </div>

    <div
        class="w-[1120px] px-20 py-14 rounded-tr-[20px] rounded-bl-[20px] rounded-br-[20px]
        shadow-[0px_4px_4px_0px_rgba(59,104,255,0.10)]
        shadow-[inset_4px_0px_3px_0px_rgba(59,104,255,0.28)]
        backdrop-blur-[1px]
        flex flex-col gap-8 overflow-hidden">

        <div class="self-stretch text-center text-[#EFECE3] text-5xl font-bold">
            Modern Building House
        </div>

        @foreach ($documents as $document)

        <div class="self-stretch flex justify-start items-center gap-8">

            <div
                class="flex-1 p-4 bg-white rounded-lg
                shadow-[0px_4px_4px_0px_rgba(0,0,0,0.25)]
                outline outline-1 outline-offset-[-1px] outline-[#676666]
                flex justify-start items-start gap-2.5 overflow-hidden">

                <div class="w-64 flex items-center gap-4">

                    <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none">
                        <path d="M14 2H6C4.9 2 4 2.9 4 4V20C4 21.1 4.9 22 6 22H18C19.1 22 20 21.1 20 20V8L14 2Z" stroke="black" stroke-width="1.5"/>
                        <path d="M14 2V8H20" stroke="black" stroke-width="1.5"/>
                    </svg>

                    <div class="text-black text-xl font-normal">
                        {{ basename($document->file_path) }}
                    </div>

                </div>

            </div>

            <div class="flex justify-start">

            @include('components.common.negotiation-status', [
            'type' => $document->status
            ])

            </div>

        </div>

        @endforeach

    </div>

</div>

</body>
</html>