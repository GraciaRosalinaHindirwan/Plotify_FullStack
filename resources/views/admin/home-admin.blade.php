<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
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
   @vite('resources/css/design-system.css')
  @vite('resources/css/admin.css')
</head>
<body>
    <div class="layout">
        @include('components/admin/sidebar')

        <!--content-->
        <div class="main-content">
            <div class="content-header">
                <h3 class="title">Dashboard</h3>
                <div class="header-right">
                    <div class="profile">
                        <h3 class="admin-name">Admin User</h3>
                        <p class="admin-role">Administrator</p>
                    </div>

                    <div class="avatar">
                        AU
                    </div>
                </div>
            </div>

            <hr class="divider">

            <div class="header-right">
                <img src="/img/dashboard.png" alt="" id="dashboard-logo">
                <div class="content-body">
                    <p class="body-text-title">Dashboard Overview</p>
                    <p class="body-text">Ringkasan data sistem platform properti</p>                </div>
            </div>

             <div class="cards">
                <div class="card-stat">
                    <div class="card-top">
                        <div class="icon-box">
                            <i class="bi bi-people"></i>
                        </div>
                        <span>Total Agen</span>
                    </div>

                    <div class="card-number">
                        124
                    </div>
                </div>

                <div class="card-stat">
                    <div class="card-top">
                        <div class="icon-box">
                            <i class="bi bi-person-badge"></i>
                        </div>
                        <span>Total Notaris</span>
                    </div>
                    <div class="card-number">
                        45
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    function toggleDropdown() {
        document.getElementById("submenu").classList.toggle("hidden");
    }
</script>
</html>