<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="{{route('login.Post')}}" method="POST">
        @csrf
        <label for="Email">Email</label>
        <input type="email" placeholder="Email" id="Email" name="email" required>
        <br>

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password" required>
        <br>


        <button type="submit">Login</button>

        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    </form>

    
</body>
</html>