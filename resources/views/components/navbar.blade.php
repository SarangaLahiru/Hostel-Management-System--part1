<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/public/navbar.css">
    <link rel="stylesheet" href="{{ asset('navbar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <header>
        <div class="box">
            <h2>HMS</h2>
        </div>
        <div class="box ">
            <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}"><i class="fa-solid fa-gauge"></i>Dashboard</a></li>
            <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}"><i class="fa-solid fa-door-open"></i>Rooms</a></li>
            <li class="{{ request()->routeIs('/') ? 'active' : '' }}"><a href=""><i class="fa-solid fa-book-bookmark"></i>Attendance</a></li>
            <li class="{{ request()->routeIs('/') ? 'active' : '' }}"><a href=""><i class="fa-solid fa-landmark"></i>Accounts</a></li>
            <li class="{{ request()->routeIs('/') ? 'active' : '' }}"><a href=""><i class="fa-solid fa-toolbox"></i>Maintenance</a></li>
        </div>
        <div class="box box1">
            <a href=""><i class="fa-regular fa-calendar"></i></a>
            <a href=""><i class="fa-solid fa-bell"></i></a>
            <a href=""><i class="fa-solid fa-user"></i></a>
        </div>
    </header>
    

</body>
</html>