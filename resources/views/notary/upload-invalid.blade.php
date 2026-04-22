<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add AJB Detail</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@400;700&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
</head>

<body class="bg-black text-[#EFECE3] font-[Poppins]">

<div class="w-[1280px] p-[80px] flex flex-col gap-[64px] mx-auto">

    <div class="flex items-center justify-between w-full">
        <a href="/notary/add-AJB" class="w-3 h-6 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-6" viewBox="0 0 12 24" fill="none">
                <path d="M3.34299 12L10.414 19.071L8.99999 20.485L1.22199 12.707C1.03451 12.5195 0.929199 12.2652 0.929199 12C0.929199 11.7348 1.03451 11.4805 1.22199 11.293L8.99999 3.51501L10.414 4.92901L3.34299 12Z" fill="white"/>
            </svg>
        </a>

        <h1 class="text-[45px] font-bold">Unggah AJB</h1>

        <div class="w-[50px] h-[50px] bg-gray-400 rounded-full flex items-center justify-center text-white text-[10px] tracking-widest">
            MK
        </div>
    </div>

    <div class="w-[1120px] px-[80px] py-[60px] flex flex-col gap-8 rounded-[20px] shadow-[inset_4px_0px_3px_rgba(59,104,255,0.28),0px_4px_4px_rgba(59,104,255,0.10)]">

        <h1 class="text-[45px] font-bold">Detail Dokumen</h1>

        <div class="w-[960px] p-8 bg-[#1E1E1E] rounded-[32px] border border-[#0E21A0] flex flex-col gap-8">

            <div class="text-center text-3xl font-bold">TOTAL PEMBAYARAN</div>
            <div class="text-center text-[45px] font-bold">IDR 500.000.000,00</div>

            <div class="text-3xl font-bold">Detail Agen</div>

            <div class="flex justify-between w-full">
                <div class="flex flex-col gap-2">
                    <p class="text-2xl font-bold">ID Agen</p>
                    <p class="text-2xl">A001</p>
                </div>
                <div class="flex flex-col gap-2">
                    <p class="text-2xl font-bold">Nama Agen</p>
                    <p class="text-2xl">Rizki Pratama</p>
                </div>
                <div class="flex flex-col gap-2">
                    <p class="text-2xl font-bold">Nomor Telepon</p>
                    <p class="text-2xl">0812-3456-7890</p>
                </div>
            </div>

            <div class="flex flex-col gap-2">
                <p class="text-2xl font-bold">Wilayah Kerja</p>
                <p class="text-2xl">Jakarta Selatan & Depok</p>
            </div>

            <div class="h-[1px] w-full bg-gray-500"></div>

            <div class="text-3xl font-bold">Detail Pemilik</div>

            <div class="flex justify-between w-full">
                <div class="flex flex-col gap-2">
                    <p class="text-2xl font-bold">ID Pemilik</p>
                    <p class="text-2xl">OWN001</p>
                </div>
                <div class="flex flex-col gap-2">
                    <p class="text-2xl font-bold">Nama Pemilik</p>
                    <p class="text-2xl">Bella Savitri</p>
                </div>
                <div class="flex flex-col gap-2">
                    <p class="text-2xl font-bold">Nomor Telepon</p>
                    <p class="text-2xl">0812-3456-7890</p>
                </div>
            </div>

            <div class="h-[1px] w-full bg-gray-500"></div>

            <div class="text-3xl font-bold">Detail Pelanggan</div>

            <div class="flex justify-between w-full">
                <div class="flex flex-col gap-2">
                    <p class="text-2xl font-bold">ID Pelanggan</p>
                    <p class="text-2xl">PE001</p>
                </div>
                <div class="flex flex-col gap-2">
                    <p class="text-2xl font-bold">Nama Pelanggan</p>
                    <p class="text-2xl">Bella Savitri</p>
                </div>
                <div class="flex flex-col gap-2">
                    <p class="text-2xl font-bold">Nomor Telepon</p>
                    <p class="text-2xl">0812-3456-7890</p>
                </div>
            </div>

            <div class="h-[1px] w-full bg-gray-500"></div>

            <div class="text-3xl font-bold">Detail Properti</div>

            <div class="flex justify-between w-full">
                <div class="flex flex-col gap-2">
                    <p class="text-2xl font-bold">ID Properti</p>
                    <p class="text-2xl">P001</p>
                </div>
                <div class="flex flex-col gap-2">
                    <p class="text-2xl font-bold">Jenis Properti</p>
                    <p class="text-2xl">Boarding</p>
                </div>
                <div class="flex flex-col gap-2">
                    <p class="text-2xl font-bold">Nama Properti</p>
                    <p class="text-2xl">Modern Boarding House</p>
                </div>
            </div>

            <div class="flex justify-between w-full">
                <div class="flex flex-col gap-2">
                    <p class="text-2xl font-bold">Harga Properti</p>
                    <p class="text-2xl">IDR 500.000.000,00</p>
                </div>
                <div class="flex flex-col gap-2">
                    <p class="text-2xl font-bold">Status Properti</p>
                    <p class="text-2xl">Tersedia</p>
                </div>
                <div class="flex flex-col gap-2">
                    <p class="text-2xl font-bold">Lokasi Properti</p>
                    <p class="text-2xl">Jakarta Selatan</p>
                </div>
            </div>

            <div class="h-[1px] w-full bg-gray-500"></div>

            <div class="text-3xl font-bold">Detail Transaksi</div>

            <div class="flex justify-between w-full">
                <div class="flex flex-col gap-2">
                    <p class="text-2xl font-bold">ID Transaksi</p>
                    <p class="text-2xl">T001</p>
                </div>
                <div class="flex flex-col gap-2">
                    <p class="text-2xl font-bold">Metode Bayar</p>
                    <p class="text-2xl">Langsung</p>
                </div>
                <div class="flex flex-col gap-2">
                    <p class="text-2xl font-bold">Tanggal</p>
                    <p class="text-2xl">14 Feb 2026</p>
                </div>
                <div class="flex flex-col gap-2">
                    <p class="text-2xl font-bold">Status</p>
                    <p class="text-2xl">SELESAI</p>
                </div>
            </div>

        </div>

        <div class="w-[960px] p-8 bg-[#1E1E1E] rounded-[32px] border border-[#0E21A0] flex flex-col gap-8">

            <div class="text-center text-3xl font-bold">Akta Jual Beli (AJB)</div>

            <div class="self-stretch p-4 bg-[#F9C4C4] rounded-lg shadow-[0px_4px_4px_0px_rgba(0,0,0,0.25)] outline outline-1 outline-offset-[-1px] outline-[#FF0000] inline-flex flex-col justify-center items-start gap-4 overflow-hidden">
                <div class="inline-flex justify-center items-center gap-[5px]">
                    <div class="w-5 h-5 relative overflow-hidden">
                        <img src="/img/warning.png" alt="">
                    </div>
                    <div class="justify-start text-[#FF0000] text-xl font-normal font-['Balsamiq_Sans'] leading-4">Dokumen Tidak dapat diunggah</div>
                </div>
                <div class="self-stretch px-3.5 flex flex-col justify-start items-start gap-[5px]">
                    <div class="inline-flex justify-center items-center gap-4">
                        <div class="w-6 h-6 relative overflow-hidden">
                            <div class="w-1 h-1 left-[10px] top-[10px] absolute bg-[#7B2323]"></div>
                        </div>
                        <div class="justify-start text-[#7B2323] text-xl font-normal font-['Balsamiq_Sans'] leading-4">Format file harus PDF</div>
                    </div>
                    <div class="inline-flex justify-center items-center gap-4">
                        <div class="w-6 h-6 relative overflow-hidden">
                            <div class="w-1 h-1 left-[10px] top-[10px] absolute bg-[#7B2323]"></div>
                        </div>
                        <div class="justify-start text-[#7B2323] text-xl font-normal font-['Balsamiq_Sans'] leading-4">Ukuran file melebihi 5MB</div>
                    </div>
                </div>
            </div>

            <div class="flex justify-between gap-8">
                <div class="flex-1">
                    @include('components/admin/uploadImg', [
                        'name' => 'gambar',
                        'label' => 'Unggah',
                        'required' => true
                    ])
                    <p class="text-[#FF0000] text-sm mt-2 font-['Balsamiq_Sans']">*File yang dipilih tidak valid</p>
                </div>

                <div class="flex flex-col gap-6 w-[300px]">
                    <p class="text-2xl font-bold">Dokumen Terunggah</p>

                    <div class="self-stretch p-4 bg-[#F9C4C4] rounded-lg shadow-[0px_4px_4px_0px_rgba(0,0,0,0.25)] outline outline-1 outline-offset-[-1px] outline-[#FF0000] inline-flex justify-between items-center overflow-hidden">
                        <div class="w-32 flex justify-center items-center gap-4">
                            <div class="justify-start text-black text-xl font-normal font-['Poppins']">KTP.JPG</div>
                        </div>
                        <div class="w-32 flex justify-center items-center gap-4">
                            <div class="justify-start text-[#FF0000] text-xl font-normal font-['Poppins']">Invalid</div>
                        </div>
                    </div>

                    @include('components/admin/button', [
                        'type' => 'button',
                        'id' => null,
                        'slot' => 'Unggah ulang'
                    ])
                </div>
            </div>

        </div>

    </div>

</div>

</body>
</html>