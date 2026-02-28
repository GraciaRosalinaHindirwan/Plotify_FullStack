<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    
    <!-- Link -->
     <link rel="stylesheet" href="css/design-system.css">
     <link rel="stylesheet" href="css/register.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
</head>

<body>
<div style="display: flex; padding: 0 80px; justify-content: space-between; width: 100vw;">
    <div class="glass-container" style="flex: 1; max-width: 500px;">
        <h1 class = "title">Create Account</h1>
        <p class = "subtitle">Daftar sekarang dan mulai transaksi jual beli tanah dengan mudah.</p>
        
        <form action="">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput" style="color:var(--color-text); font-size: var(--body-sm)">Email address</label>
            </div>
            
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingUsername" placeholder="Username">
                <label for="floatingUsername" style="color:var(--color-text); font-size: var(--body-sm)">Username</label>
            </div>
            
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword" style="color:var(--color-text); font-size: var(--body-sm)">Password</label>
            </div>
            
            <div class="d-grid gap-2">
                <button type="button" class="btn btn-outline-primary">Daftar</button>
            </div>
        </form>
        <div class="divider">
            <span style="color:var(--color-text)">Atau</span>
        </div>
        
        <button type="button" class="btn btn-outline-primary w-100 d-flex align-items-center justify-content-center gap-2" style="font-size: var(--body-md)">
            <img src="https://developers.google.com/identity/images/g-logo.png" width="20">
            Lanjutkan dengan Google
        </button>
        
        <center>
            <p class="mt-3" style="color:var(--color-text); font-size: var(--body-sm);">
                Sudah punya akun? 
                <a href="login.html" class ="link">Masuk di sini</a>
            </p>
        </center>
    </div>
    
    <div style="flex: 1; max-width: 500px;display: flex;flex-direction: column; justify-content: space-between; padding: 1rem;align-items: center;">
        <h1 class="side_desc">Mulai Perjalanan Investasi Anda Hari Ini</h1>
        <h1 class="side_desc">Bergabunglah bersama ribuan pengguna yang telah menemukan tanah strategis melalui platform kami.</h1>
    </div>
</div>

</body>
</html>