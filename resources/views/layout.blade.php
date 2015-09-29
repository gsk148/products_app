<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="{{ elixir('css/all.css') }}" rel="stylesheet">
    <script src="/js/all.js"></script>

</head>
<body>
@include('pages.nav')
<div class="container" id="content">
    @yield('content')
</div>
</body>
</html>