<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    <!-- link -->
    <link rel="stylesheet" href="/css/design-system.css">
    <link rel="stylesheet" href="/css/pengguna.css">

    <script>
const selectBtn = document.getElementById("selectBtn");
const selectMenu = document.getElementById("selectMenu");
const items = document.querySelectorAll(".select-item");
const roleInput = document.getElementById("roleInput");

// buka tutup dropdown
selectBtn.addEventListener("click", function() {
    selectMenu.classList.toggle("show");
});

// pilih item
items.forEach(item => {
    item.addEventListener("click", function() {

        selectBtn.textContent = this.textContent;
        roleInput.value = this.textContent;

        selectMenu.classList.remove("show");
    });
});

// klik luar = tutup
document.addEventListener("click", function(e){
    if(!selectBtn.contains(e.target) && !selectMenu.contains(e.target)){
        selectMenu.classList.remove("show");
    }
});
</script>
</head>
<body>

    <div class="layout">
        @include('components/admin/sidebar')

        <!-- CONTENT -->
        <div class="main-content">

           <div class="content-header">
                <h3 class="title">Daftar Pengguna</h3>
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
                <div class="content-body">
                    <table class="table-container">
                        <thead class="head-container">
                            <tr>
                                <th class="title-table">Nama</th>
                                <th class="title-table">E-mail</th>
                                <th class="title-table">Role</th>
                                <th class="title-table">Registrasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="body-table">
                                <td class="item-body">Budi Santoso</td>
                                <td class="item-body">budi.santoso@gmail.com</td>
                                <td class="item-body">Agen</td>
                                <td class="item-body">15 Jan 2026</td>
                            </tr>
    
                            <tr class="body-table">
                                <td class="item-body">Siti Nurhaliza</td>
                                <td class="item-body">siti.nurhaliza@gmail.com</td>
                                <td class="item-body">Notaris</td>
                                <td class="item-body">12 Jan 2026</td>
                            </tr>
                        </tbody>
                    </table>
                </div>   
            </div>
        </div>
    </div>
</body>
<script>
    function toggleDropdown() {
        document.getElementById("submenu").classList.toggle("show");
    }
document.querySelector(".select-btn").onclick = function(){
    document.querySelector(".select-menu").classList.toggle("show");
}
</script>


</html>