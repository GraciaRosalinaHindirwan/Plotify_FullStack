<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add property</title>
     <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    <!-- link -->
    <link rel="stylesheet" href="/css/design-system.css">
    <link rel="stylesheet" href="/css/pemilik.css">
</head>
<body>
    @include('components/pemilik/header')
    @include('/components/pemilik/progress')

    <div class="glass-container">
        <form action="">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="PropertyAddress" placeholder="PropertyAddress">
                <label for="PropertyAddress" style="color:var(--color-text); font-size: var(--body-sm)">Nama Properti</label>
            </div>
            
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="PropertyAddress" placeholder="PropertyAddress">
                <label for="PropertyAddress" style="color:var(--color-text); font-size: var(--body-sm)">Alamat Properti</label>
            </div>
            
            <div class="d-grid gap-2">
                <button type="button" class="btn btn-outline-primary">Selanjutnya</button>
            </div>
        </form>

</body>
</html>