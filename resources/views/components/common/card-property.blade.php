@php use Illuminate\Support\Str; @endphp
<div class="relative w-full p-[24px] rounded-[20px]bg-white/15 backdrop-blur-[15px]
border-transparent border rounded-[16px] shadow-[0_8px_32px_rgba(0,0,0,0.2)]"
style="background: linear-gradient(var(--color-surface)) padding-box, var(--btn-gradient) border-box">
<img src="{{ asset($property->property_image->first()->url) }}" alt="building" class="w-full rounded-[16px] mb-[16px]">
<h1 class="text-[var(--color-text)] mb-[16px] font-[var(--fw-bold)] text-[18px]">{{ $property->name }}</h1>
<p class="line-clamp2 text-[var(--color-text)] mb-[16px] text-[14px] ">{{ Str::limit($property->description, 100) }}</p>
 @include("components/common/button", [
      'href' => route('property.detail', ['id' => $property->id]),
      'slot' => 'Lihat Selengkapnya'
    ])
</div>