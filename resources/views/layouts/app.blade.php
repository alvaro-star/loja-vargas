<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Name - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    @section('sidebar')

    @show

    <div class="flex justify-center align-items">
        @yield('content')
    </div>
</body>

</html>