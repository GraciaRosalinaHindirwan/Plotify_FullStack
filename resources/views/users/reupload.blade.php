@extends('layouts.detail')

@section('content')

<form 
    action="{{ route('users.reuploadDocumentStore', ['id' => $document->id]) }}" 
    method="POST" 
    enctype="multipart/form-data"
>
    @csrf
    <div class="flex backdrop-blur-md border border-white/20 shadow-lg rounded-2xl mx-[80px] py-[32px] px-[80px] flex-col gap-[32px]">
        <div class="flex flex-col gap-[16px]">
            <h1 class="text-[20px] text-[var(--color-text)] font-semibold">
                Masukkan {{ $document->document_type }}
            </h1>
            <div class="w-full flex">
                <!-- Button -->
                <label 
                   for="file-upload-{{ $document->id }}" 
                    class="px-6 py-4 border-2 border-[var(--color-secondary)] rounded-l-xl bg-black text-white cursor-pointer hover:bg-zinc-900 transition"
                >
                    Choose File
                </label>

                <!-- File Name -->
                <div 
                    class="flex-1 px-4 py-4 border-2 border-l-0 border-dashed rounded-r-xl text-gray-400 bg-black"
                    id="file-name-{{ $document->id }}"
                    style="
                        background:
                        linear-gradient(var(--color-surface), var(--color-surface)) padding-box,
                        var(--btn-gradient2) border-box;

                        border-color: transparent;
                    "
                >
                    No file chosen
                </div>

                <!-- Input -->
                <input 
                    type="file"

                    id="file-upload-{{ $document->id }}"

                    name="document_file"

                    class="hidden"

                    onchange="
                        document.getElementById('file-name-{{ $document->id }}').innerText =
                        this.files[0]?.name || 'No file chosen'
                    "
                >

            </div>

        </div>

        @include("components.common.button", [ 
            'type' => 'submit',
            'slot' => 'Konfirmasi Unggah Dokumen' 
        ])

    </div>

</form>

@endsection