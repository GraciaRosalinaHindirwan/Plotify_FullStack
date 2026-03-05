@extends("layouts/admin")

@section("content")
    <!-- CONTENT -->
    <div class="w-full px-6 py-4">
      @include("components/admin/header")

      <div class="flex items-center gap-[12px]">
        <img src="/img/formulir.png" alt="" id="dashboard-logo">
        <div>
          <p class="text-[var(--color-text)] font-semibold" style="font-size: var(--h2-size)">Formulir Registrasi Akun</p>
        </div>
      </div>

      <form action="">
        <div class="p-8 flex flex-col gap-4">
          <div class="flex gap-[24px]">
            <div class="relative w-full">
            
            <input 
              type="text"
              name="namaLengkap"
              class="peer w-full border border-transparent rounded-lg p-3 pt-5 outline-none focus:border-pink-500 text-[var(--color-text)]
              focus:shadow-[0_0_0_2px_rgba(243,117,194,0.3),0_0_12px_rgba(243,117,194,0.7),0_0_20px_rgba(243,117,194,0.4)]" 
              style="background: linear-gradient(var(--color-surface)) padding-box,
              var(--btn-gradient2) border-box ;"
            />

            <label 
              class="absolute left-3 top-3 text-[var(--color-text)] text-sm transition-all 
                    peer-placeholder-shown:top-3 
                    peer-placeholder-shown:text-base 
                    peer-focus:top-1 
                    peer-focus:text-xs 
                    peer-focus:text-[var(--color-text)]">
              Nama Lengkap
            </label>

          </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingNama" placeholder="nama">
              <label for="floatingNama" style="color:var(--color-text); font-size: var(--body-sm)">Nama Lengkap</label>
            </div>

            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingEmail" placeholder="email">
              <label for="floatingEmail" style="color:var(--color-text); font-size: var(--body-sm)">Email</label>
            </div>
          </div>

          <div class="row-form">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingNomorTelepon" placeholder="nomor telepon">
              <label for="floatingNomorTelepon" style="color:var(--color-text); font-size: var(--body-sm)">Nomor
                Telepon</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingUsername" placeholder="username">
              <label for="floatingUsername" style="color:var(--color-text); font-size: var(--body-sm)">Username</label>
            </div>
          </div>

          <div class="row-form">
            <div class="form-floating">
              <div class="custom-select">
                <div class="select-btn" id="select-btn">Role</div>

                <input type="hidden" id="roleInput" name="role">

                <div class="select-menu" id="select-menu">
                  <div class="select-item">Agen</div>
                  <div class="select-item">Notaris</div>
                </div>
              </div>
            </div>

            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="floatingPassword" placeholder="password">
              <label for="floatingPassword" style="color:var(--color-text); font-size: var(--body-sm)">Password</label>
            </div>
          </div>
          
                  <div class="profil">
                    <label for="formFileLg" class="form-label">Profil</label>
                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                  </div>

                  <div class="wilayah">
                    <label for="formFileLg" class="form-label">Wilayah Kerja</label>
                    <div class="dropdown">
                      <input type="text" id="searchInput" placeholder="Pilih kota..." />
                      <div class="dropdown-list" id="dropdownList">
                        <div class="item">Jakarta</div>
                        <div class="item">Bandung</div>
                        <div class="item">Surabaya</div>
                        <div class="item">Yogyakarta</div>
                      </div>
                    </div>
                  </div>
          
                  <!-- TAG CONTAINER -->
                  <div class="tags-container" id="tagsContainer"></div>
        </div>
      </form>
    </div>
  </div>
@endsection

@push("scripts")
<script src="/scripts/manajemen-akun.js"></script>
<script>
  function toggleDropdown() {
    document.getElementById("submenu").classList.toggle("show");
  }
  document.querySelector(".select-btn").onclick = function () {
    document.querySelector(".select-menu").classList.toggle("show");
  }
</script>

<script>
  const selectBtn = document.getElementById("select-btn");
  const selectMenu = document.getElementById("select-menu");
  const items = document.querySelectorAll(".select-item");
  const roleInput = document.getElementById("roleInput");

  // pilih item
  items.forEach(item => {
    item.addEventListener("click", function () {

      selectBtn.textContent = this.textContent;
      roleInput.value = this.textContent;

      selectMenu.classList.remove("show");
    });
  });

  // klik luar = tutup
  document.addEventListener("click", function (e) {
    if (!selectBtn.contains(e.target) && !selectMenu.contains(e.target)) {
      selectMenu.classList.remove("show");
    }
  });
</script>
@endpush

