<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    {{-- CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- MY CSS --}}
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Favicon --}}
    <link rel="icon" href="https://cdn.pixabay.com/photo/2012/04/28/18/16/food-43845_960_720.png">

</head>
<body>
    <nav>
        <div class="top-bar">
            <a href="/dashboard" class="text-decoration-none text-white"><a href="/dashboard"><h4>Dashboard</h4></a></a>
            <i class="fa-solid fa-bars burger-navbar"></i>
        </div>
        <div class="sidebar-phone" id="sidebar-phone">
            <ul>
                <small>Menu</small>
                <a href=""><li><i class="fa-solid fa-burger"></i> List Menu</li></a>
                <a href=""><li><i class="fa-solid fa-utensils"></i> Best Seller</li></a>
                <a href=""><li><i class="fa-solid fa-seedling"></i> Discount Menu</li></a>
                <a href=""><li><i class="fa-solid fa-ticket-simple"></i> Discount Coupon</li></a>
            </ul>
            <hr>
            <ul>
                <small>Order</small>
                <a href=""><li><i class="fa-solid fa-file-circle-check"></i> My Order</li></a>
                <a href=""><li><i class="fa-solid fa-file-invoice"></i> Riwayat Order</li></a>
                <a href=""><li><i class="fa-solid fa-ticket-simple"></i> My Coupon</li></a>
            </ul>
            <hr>
            <ul>
                <small>Help</small>
                <a href=""><li><i class="fa-solid fa-headset"></i> Customer Service</li></a>
                <a href=""><li><i class="fa-solid fa-question"></i> FAQ</li></a>
            </ul>
            <hr>
            <ul>
                <small>Other</small>
                <a href=""><li><i class="fa-solid fa-gear"></i> Setting</li></a>
                <a href=""><li><i class="fa-solid fa-right-from-bracket"></i> Logout</li></a>
            </ul>
        
        </div>
        <div class="sidebar-dekstop">
            <ul>
                <small>Menu</small>
                <a href=""><li><i class="fa-solid fa-burger"></i> List Menu</li></a>
                <a href=""><li><i class="fa-solid fa-utensils"></i> Best Seller</li></a>
                <a href=""><li><i class="fa-solid fa-seedling"></i> Discount Menu</li></a>
                <a href=""><li><i class="fa-solid fa-ticket-simple"></i> Discount Coupon</li></a>
            </ul>
            <hr>
            <ul>
                <small>Order</small>
                <a href=""><li><i class="fa-solid fa-file-circle-check"></i> My Order</li></a>
                <a href=""><li><i class="fa-solid fa-file-invoice"></i> Riwayat Order</li></a>
                <a href=""><li><i class="fa-solid fa-ticket-simple"></i> My Coupon</li></a>
            </ul>
            <hr>
            <ul>
                <small>Help</small>
                <a href=""><li><i class="fa-solid fa-headset"></i> Customer Service</li></a>
                <a href=""><li><i class="fa-solid fa-question"></i> FAQ</li></a>
            </ul>
            <hr>
            <ul>
                <small>Other</small>
                <a href=""><li><i class="fa-solid fa-gear"></i> Setting</li></a>
                <a href=""><li><i class="fa-solid fa-right-from-bracket"></i> Logout</li></a>
            </ul>
        </div>
    </nav>

    {{-- JS Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- MY JS --}}
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>