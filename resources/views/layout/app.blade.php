<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("css/app.css")  }}">
    <title>
        @yield('title')
    </title>
</head>
<body class="bg-gray-200">
    <nav class="flex   justify-between bg-white p-2 font-semibold">
        <ul class="flex items-center">
            <li class="p-3">
                <a href=" {{  route("home")  }} " >Home</a>
            </li>
            <li class="p-3">
                <a href=" {{  route("dashboard")  }} " >Dashboard</a>
            </li>
            <li class="p-3">
                <a href=" {{  route("post")  }} " >Post</a>
            </li>
        </ul>
        <ul class="flex items-center">
            <li class="p-3">
                <a href=" {{  route("profil")  }} " >Abdelhamid</a>
            </li>
            <li class="p-3">
                <a href=" {{  route("login")  }} " >Login in</a>
            </li>
            <li class="p-3">
                <a href=" {{  route("register")  }} " >Register</a>
            </li>
            <li class="p-3">
                <a href=" {{  route("logout")  }} " >Logout</a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>