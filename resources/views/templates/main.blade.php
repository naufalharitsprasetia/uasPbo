<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Font Google Luckiest Guy -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Chewy&family=Jockey+One&family=Luckiest+Guy&family=Nabla&family=Noto+Sans+Arabic:wght@700&family=Odibee+Sans&family=Poppins:wght@500&display=swap"
        rel="stylesheet">
    {{-- Font AWESOME --}}
    <script src="https://kit.fontawesome.com/0e361b3f2b.js" crossorigin="anonymous"></script>
    <!-- Logo -->
    <link rel="icon" href="img/logotok.png" />
    <!-- Title -->
    <title>SIBETA | Home</title>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <!-- Own Style -->
    <link rel="stylesheet" href="css/style.css" />

<body>
    @include('templates.navbar')
    @yield('container')
    @include('templates.footer')
    {{-- JS Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
