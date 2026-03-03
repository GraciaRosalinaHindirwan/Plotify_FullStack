<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
    integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400;1,600&display=swap"
    rel="stylesheet">
  <!-- link -->
  <link rel="stylesheet" href="/css/design-system.css">
  <link rel="stylesheet" href="/css/manajemen-akun.css">

</head>

<body>

  <div class="layout">
    @include('components/admin/sidebar')

    <!-- CONTENT -->
    <div class="main-content">

      @include("components/admin/header")

      <div class="header-right">
        <img src="/img/formulir.png" alt="" id="dashboard-logo">
        <div class="content-body">
          <p class="body-text-title">Formulir Registrasi Akun</p>
        </div>
      </div>

      <form action="">
        <div class="body-form">
          <div class="row-form">
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

</body>
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


</html>
