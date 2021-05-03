<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title></title>
</head>
<body>
    <div>
        <nav>
            <a href="{{route('login')}}" class="text-xl no-undeline text-blue-500">sign in</a>
            <a href="{{route('register')}}"
             class="text-xl no-underline bg-blue-500 text-white">sign up</a>
        </nav>
    </div>
</body>
</html>