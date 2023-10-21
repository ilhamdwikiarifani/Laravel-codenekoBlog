<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Codeneko | Admin</title>

    @include('backEnd.components.style')

</head>

<body class="bg-admin-gray">
    @include('backEnd.components.navbar')

    @yield('adminContent')

    @include('backEnd.components.footer')

    @include('backEnd.components.script')

</body>

</html>