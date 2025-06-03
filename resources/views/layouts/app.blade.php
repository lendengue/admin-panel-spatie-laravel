<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Laravel App')</title>

    <!-- General CSS -->
    <link rel="stylesheet" href="" />

    <!-- Page-specific CSS -->
    @yield('styles')
</head>
<body>
    @yield('content')
</body>
</html>
