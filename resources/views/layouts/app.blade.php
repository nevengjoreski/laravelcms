<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>

@include('inc.navbar')

<div class="container">

    @include('inc.errors')

    @if(Request::is('/'))
        @include('inc.showcase')
    @endif

    <div class="row mt-5">
        <div class="col-md-8">
            @yield('content')
        </div>

        <div class="col-md-4">
            @include('inc.sidebar')
        </div>
    </div>
</div>

<footer class="text-center bg-dark">
    <p>Copyright 2018 &copy; NenoLand</p>
</footer>


</body>
</html>