@extends("layouts/admin")
@section("content")

<!--content-->
<div class="w-full px-6 py-4">
@include("components/admin/header")
<div class="header-right">
<div class="w-full border-separate border-spacing-0 table-fixed
rounded-lg px-[32px] py-[16px] text-[var(--color-text)] border-2 border-transparent"
style=" background:
linear-gradient(#0a0a0a,#0a0a0a) padding-box,
linear-gradient(90deg,var(--color-highlight)) border-box;
box-shadow:
    0 0 10px rgba(168,85,247,0.3),
    0 0 20px rgba(168,85,247,0.15);
background-clip: padding-box, border-box;">
    <div class="w-full border-separate border-spacing-0 table-fixed
    rounded-lg p-[8px] text-[var(--color-text)] border-2 border-transparent"
    style="background:
    linear-gradient(#0a0a0a,#0a0a0a) padding-box,
    linear-gradient(90deg, #4D2FB2, #B153D7, #F375C2, #B153D7,#4D2FB2);
    background-clip: padding-box, border-box;">
    <table class="w-full table-fixed">
        <tr>
            <th class="border-none bg-transparent py-4 px-5 text-[var(--color-text)]">Nama</th>
            <th class="border-none bg-transparent py-4 px-5 text-[var(--color-text)]">E-mail</th>
            <th class="border-none bg-transparent py-4 px-5 text-[var(--color-text)]">Role</th>
            <th class="border-none bg-transparent py-4 px-5 text-[var(--color-text)]">Registrasi</th>
        </tr>
    </table>
    </div>
    <div class="w-full border-separate border-spacing-0 table-fixed
    rounded-lg p-[16px] text-[var(--color-text)] border-2 border-transparent">
        <table class="w-full table-fixed">
             @foreach ($users as $user)
            <tr>
                <td class="border-none bg-transparent py-3 px-5 text-[var(--color-text)] text-center">{{ $user->fullname }}</td>
                <td class="border-none bg-transparent py-3 px-5 text-[var(--color-text)] text-center">{{ $user->email }}</td>
                <td class="border-none bg-transparent py-3 px-20 text-[var(--color-text)] text-center">{{ $user->role }}</td>
                <td class="border-none bg-transparent py-3 px-5 text-[var(--color-text)] text-center">{{ $user->created_at }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection