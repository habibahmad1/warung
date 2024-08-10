<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Warung Gokil</title>
    {{-- Fav Ico --}}
    <link rel="icon" href="https://cdn.pixabay.com/photo/2021/05/25/02/03/restaurant-6281067_1280.png">
    {{-- CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- My CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <nav>
        <h3><a href="">Warung <span class="text-warning">Gokil</span></a> </h3>
        <ul>
            <a href="#home"><li>Home</li></a>
            <a href="#about"><li>Best Seller</li></a>
            <a href="#contact"><li>Menu</li></a>
            <a href="#contact"><li>Reviews</li></a>
        </ul>
        <a href="" class="login">Login</a>
    </nav>

    <div class="container-main">
        @yield('content')
    </div>

    {{-- My JS --}}
    <script src="{{ asset('js/script.js') }}"></script>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>