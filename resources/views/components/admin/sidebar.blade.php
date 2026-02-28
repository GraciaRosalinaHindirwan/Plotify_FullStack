<div class="sidebar">
      <!-- Logo -->
      <div class="sidebar-header">
        <img src="/img/Logo.png" alt="Logo" class="logo-img">
        <h2 class="logo-text">Admin </h2>
      </div>

      <hr class="divider">

      <!-- Menu -->
      <ul class="menu">
        <li class="menu-item">
          <img src="/img/dashboard.png" class="icon">
          <span>Dashboard</span>
        </li>

        <li class="menu-item dropdown active">

          <div class="menu-main" onclick="toggleDropdown()">

            <div class="menu-left">
              <img src="/img/account.png" class="icon">
              <span>Manajemen Akun</span>
            </div>

            <img src="/img/drop-down.png" class="arrow">

          </div>

          <ul class="submenu" id="submenu">
            <a href="/admin/account/manage">
            <li>
              Registrasi Agen dan Notaris 
            </li>
            </a>
            
            <a href="/admin/user">
            <li>
              Daftar Pengguna
            </li>
            </a>
          </ul>
        </li>
      </ul>

      <!-- Logout -->
      <hr class="divider">
      <div class="logout">
        <img src="/img/logout.png" class="icon">
        <span>Logout</span>
      </div>
    </div>