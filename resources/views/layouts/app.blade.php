<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Laravel App')</title>

    <!-- Link to external CSS -->
     <link rel="stylesheet" href="{{asset('css/login.css')}}" />
</head>
<body>
    @yield('content')
</body>
</html>
