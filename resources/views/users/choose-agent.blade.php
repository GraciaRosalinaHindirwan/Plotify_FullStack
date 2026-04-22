@extends("layouts/property")
@section("content")

<!--Search bar n filter-->
<div class="flex gap-2 w-full px-6 md:px-20 mt-4 items-center">
    <div class="flex-1">
        @include('components/common/search')
    </div>
    <div class="relative">
        @include('components/users/filter')
    </div>
</div>
  
{{-- card-loop --}}
<div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[64px] px-6 md:px-20 mt-12">
    @include("components/users/card-agent")
    @include("components/users/card-agent")
    @include("components/users/card-agent")
</div>
    
@endsection