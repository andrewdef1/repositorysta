<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('img/logo-stiper.png') }}" rel="icon">
    <link rel="shortcut icon" href="{{ asset('img/logo-stiper.png') }}" />
    <title>@yield('title', 'REPOSITORY STIPER SANTO THOMAS AQUINAS JAYAPURA')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* Your CSS styles here */
    </style>
</head>
<body>

    @yield('content')

</body>
</html>
