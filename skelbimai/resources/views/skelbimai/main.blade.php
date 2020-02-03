<!doctype html>
<html lang="LT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{!! asset("css/style.css") !!}">
    <title>Document</title>
</head>
<body>
    @include('skelbimai/_partials/header')
    @include('skelbimai/_partials/nav')
    @yield('content')
    @include('skelbimai/_partials/footer')
    <script src="{!! asset("js/main.js") !!}"></script>

</body>
</html>