<div class="
w-[270px]
h-screen
bg-[var(--color-bg)]
text-[var(--color-text)]
flex
flex-col
py-[32px] px-[24px]
rounded-xl
border-1 border-transparent rounded-xl p-6
sticky
top-0
left-0
bg-[linear-gradient(var(--color-bg),var(--color-bg)),linear-gradient(180deg,#7c3aed,#ec4899)]
[background-origin:border-box]
[background-clip:padding-box,border-box]
">
      <!-- Logo -->
      <div class="
      flex
      items-center
      gap-[16px]
      m-0s
      ">
        <img src="/img/Logo.png" alt="Logo" class="m-0 w-[80px] h-auto">
        <h2 class="font-semibold" style="font-size: var(--h2-size)">Admin</h2>
      </div>

      <hr class="border-0 h-[2px] bg-none [background:var(--btn-gradient2)] my-[15px] opacity-50">
      <!-- Menu -->
      <ul class="w-full flex flex-col gap-4 p-0 m-0 list-none">
        <li class="w-full flex flex-row items-center gap-4 px-2 py-2 rounded-xl transition-all
        hover:bg-[var(--color-surface)]
        hover:shadow-[0_0_10px_var(--color-highlight)]
        /*active*/
        bg-[var(--color-surface)] shadow-[0_0_0_2px_rgba(243,117,194,0.3),0_0_12px_rgba(243,117,194,0.7),0_0_20px_rgba(243,117,194,0.4)]">
          <img src="/img/dashboard.png">
          <span>Dashboard</span>
        </li>

        <li class="w-full box-border flex flex-col items-stretch gap-4 px-2 py-2 rounded-xl
        hover:bg-[var(--color-surface)]
        hover:shadow-[0_0_10px_var(--color-highlight)]">

          <div class="w-full flex justify-between items-center" onclick="toggleDropdown()">

            <div class="w-full flex items-center gap-[14px]">
              <img src="/img/account.png">
              <span>Manajemen Akun</span>
            </div>

            <img src="/img/drop-down.png" class="arrow">

          </div>

          <ul class="list-none pt-[10px] pl-[34px] m-0 hidden" id="submenu">
            @php
                $manajemenAccountLists = [
                  [
                    "link" => "/admin/account/manage",
                    "name" => "Registrasi Agen dan Notaris"
                  ],
                  [
                    "link" => "/admin/user",
                    "name" => "Daftar Pengguna"
                  ],
                ]
            @endphp

            @foreach($manajemenAccountLists as $manajemenAccountList)
            <li class="px-[14px] py-[12px] mb-[10px] rounded-[10px]
           border-2 border-[var(--color-highlight)]
           bg-[#050505]
           transition-all duration-200
           hover:bg-[var(--color-surface)] 
           hover:shadow-[0_0_10px_var(--color-highlight)]">
              <a class="!no-underline !text-[var(--color-text)]" href="{{ $manajemenAccountList["link"] }}">
              {{ $manajemenAccountList["name"] }} 
              </a>
            </li>
            @endforeach
          </ul>
        </li>
      </ul>

      <!-- Logout -->
      <hr class="border-0 h-[2px] bg-none [background:var(--btn-gradient2)] my-[15px] opacity-50">
      <div class="flex items-center p-[8px] rounded-[10px] cursor-pointer text-[var(--color-highlight)] transition-all duration-200
      hover:bg-[var(--color-surface)] 
      hover:shadow-[0_0_10px_var(--color-highlight)]">
        <img src="/img/logout.png" class="mx-[8px]">
        <span>Logout</span>
      </div>
    </div>