<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Choose Agent</title>
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
    @include('components/users/header')
    @include('/components/users/progress')

    <!--Search bar n filter-->
    <div class="container-search-filter mt-4">
            <div class="input-group">
                <span class="input-group-text">
                <i class="bi bi-search"></i>
                </span>
                <input type="text" class="form-control" placeholder="Search">
            </div>

            <div>
                <button class="btn btn-bg-accent d-inline-flex align-items-center gap-2 px-3 py-2 shadow-sm">
                    <i class="bi bi-sliders"></i>
                    Filter
                </button>
            </div>
    </div>

    <div class="main-container">
        <div class="agent-card-layout">

        @for($i = 0; $i < 10; $i++)
        <article class="agent-card">
            <div class="profile">
                <div class="avatar" style="width: 80px;height: 80px;">
                AU
                </div>
            </div>
            <h1 class="">Rizki Pratama</h1>

            <div class="agent-card-item-wrapper">
                <img src="/img/call.png" alt="call icon">
                <span>088225357849</span>
            </div>
            <div class="agent-card-item-wrapper">
                <img src="/img/location.png" alt="location icon">
                <span>Bantul - Yogyakarta</span>
            </div>

            <div class="gradient-divider">
            </div>

            <a class="btn btn-outline-primary" style="width: 100%;" href="google.com">Buat Janji Temu</a>
        </article>
        @endfor
    </div>
    </div>
</body>
</html>