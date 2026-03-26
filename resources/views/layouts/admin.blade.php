<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

  <!-- font -->
  <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
/>
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
    <div class="flex">
        @include('components/admin/sidebar')

        @yield("content")

    </div>
</body>
<script>
    function toggleDropdown() {
        document.getElementById("submenu").classList.toggle("hidden");
    }

</script>
@stack("scripts")
</html>  