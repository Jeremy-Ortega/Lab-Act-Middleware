<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="{{route('register.Post')}}" method="POST">
        @csrf
        <label for="Username">Username</label>
        <input type="text" placeholder="Username" name="username" required>
        <br>
        <label for="mail">Email</label>
        <input type="email" placeholder="Email"  name="email" required>
        <br>

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" required>
        <br>

        <label for="password">Confirm Password</label>
        <input type="password" placeholder="Password" name="password_confirmation" required>
        <br>

        <button type="submit">Register</button>

        
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        
    </form>

        <a href="{{route('login')}}">Already have an account?</a>
</body>
</html>
