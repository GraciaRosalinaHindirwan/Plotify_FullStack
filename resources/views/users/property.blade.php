@extends("layouts/users")
@section("content")
<div class="flex w-full items-center px-[80px]">
    @include('components/common/search')
</div>

<div class="flex w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-6 md:px-[80px] mt-[48px] items-center px-[80px] mt-[48px]">
    @include("components/common/card-property")
    @include("components/common/card-property")
    @include("components/common/card-property")
</div>
<div class="flex w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-6 md:px-[80px] mt-[48px] items-center px-[80px] mt-[48px]">
    @include("components/common/card-property")
    @include("components/common/card-property")
    @include("components/common/card-property")
</div>
@endsection