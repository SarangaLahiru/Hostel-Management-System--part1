<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/public/sidebar.css">
    <link rel="stylesheet" href="{{ asset('sidebar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="box2">
            <li class="{{ request()->routeIs('home') ? 'active1' : '' }}"><a href=""><i class="fa-solid fa-chart-simple"></i>Analytics</a></li>
            <li class="{{ request()->routeIs('') ? 'active1' : '' }}"><a href=""><i class="fa-solid fa-graduation-cap"></i>Students</a></li>
            <li class="{{ request()->routeIs('') ? 'active1' : '' }}"><a href=""><i class="fa-solid fa-face-angry"></i>Complaints</a></li>
            <li class="{{ request()->routeIs('') ? 'active1' : '' }}"><a href=""><i class="fa-solid fa-cubes"></i>Stock</a></li>
            <li class="{{ request()->routeIs('') ? 'active1' : '' }}"><a href=""><i class="fa-solid fa-users"></i>Users</a></li>
            <li class="{{ request()->routeIs('') ? 'active1' : '' }}"><a href=""><i class="fa-solid fa-cheese"></i>Meals</a></li>
    </div>
    
</body>
</html>