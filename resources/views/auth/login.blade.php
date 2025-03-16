<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Login</title>
</head>
<body class="h-screen flex items-center justify-center bg-gradient-to-r from-violet-200 to-pink-200flex-col">
    <div class="bg-white shadow-lg rounded-2xl p-8 w-full max-w-md text-center">
        <form action="{{route('login.Post')}}" method="POST">
            @csrf
            <div class="text-left">
                <label for="Email">Email : </label>
                <input type="email" placeholder="Enter Email" id="Email" name="email" required class="border-b-black">
                <br>

                <label for="password">Password : </label>
                <input type="password" placeholder="Enter Password" id="password" name="password" required>
                <br><br>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">Login </button>
            <br>
            <a href="{{route('register')}}" class="text-xs text-blue-500 text-center">Don't have an account?</a>

            @if ($errors->any())
            <ul class="bg-red-300 rounded-2xl p-4 w-full max-w-md text-red">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        </form>

    </div>
    
</body>
</html>