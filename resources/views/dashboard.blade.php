<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Dashboard</title>
</head>
<body class="h-screen flex items-center justify-center bg-gradient-to-r from-violet-200 to-pink-200 flex-col">
    Dashboard
    <div class="bg-white shadow-lg rounded-2xl p-8 w-full max-w-md text-center">

        {{-- @guest
            <a href="{{route('login')}}">Login</a>
            <a href="{{route('register')}}">Register</a>
        @endguest --}}


        {{-- @auth --}}
            <h1 class="text-xl text-bold">Hi, there {{Auth::user()->name}}</h1>
            <br><br>

            <form action="{{route('logout')}}" method="POST" >
                @csrf
                <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition duration-300">logout</button>
            </form>
        {{-- @endauth --}}
    </div>
</body>
</html>