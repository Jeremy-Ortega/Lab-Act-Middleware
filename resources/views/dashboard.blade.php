<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    dashboard

    @guest
        <a href="{{route('login')}}">Login</a>
        <a href="{{route('register')}}">Register</a>
    @endguest


    @auth
        <h1>Hi, there {{Auth::user()->name}}</h1>

        <form action="{{route('logout')}}" method="POST" >
            @csrf
            <button type="submit">logout</button>
        </form>
    @endauth

</body>
</html>