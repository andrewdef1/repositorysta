<!DOCTYPE html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<html lang="en">

@yield('head')

<body>
@yield('bodies')

@yield('footer')

@yield('scripts')

</body>
</html>
