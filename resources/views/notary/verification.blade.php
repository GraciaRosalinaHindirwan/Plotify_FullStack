@extends("layouts/notary")

@section("content")
<div class="w-[1280px] p-[80px] flex flex-col justify-center items-start ">

    <div class="flex items-center gap-8">
        <div class="p-4 rounded-t-lg flex flex-col gap-8
            shadow-[inset_0px_4px_3px_rgba(59,104,255,0.28),0px_4px_4px_rgba(59,104,255,0.10)]">
            <a href="{{ url('/notary/verification') }}">
                <p class="text-xl font-bold text-[#B153D7]">Verifikasi Dokumen</p>
            </a>
        </div>

        <a href="{{ url('/notary/verification-final') }}">
            <p class="text-xl font-bold">Dokumen Final</p>
        </a>
    </div>

    <div class="w-[1120px] px-[80px] py-[60px] flex flex-col gap-8 rounded-tr-[20px] rounded-br-[20px] rounded-bl-[20px]
        shadow-[inset_4px_0px_3px_rgba(59,104,255,0.28),0px_4px_4px_rgba(59,104,255,0.10)]">

        <h1 class="text-[45px] font-bold">Daftar Dokumen</h1>

        <a href="{{ url('/notary/upload-detail') }}">
        <div class="w-full bg-[#1E1E1E] border border-[#0E21A0] rounded-lg p-4 flex flex-col gap-4">
            <div class="flex justify-between items-center">

                <div class="flex items-center gap-4">
                    <img src="/img/test.jpg" class="w-24 h-24 object-cover rounded-lg">

                    <div class="flex flex-col justify-center">
                        <p class="text-2xl font-bold">Budi Santoso</p>
                        <p class="text-base">DOC-001</p>
                    </div>
                </div>

                <div class="flex flex-col items-end gap-4">
                    <div class="px-[5px] bg-gray-400 border border-gray-500">
                        <p class="text-black text-base">Lengkap</p>
                    </div>
                    </div>
                </div>

            </div>
        </div>
        </a>
    </div>

</div>
@endsection