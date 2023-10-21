<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Codeneko | Blog</title>

    @include('frontEnd.components.style')

</head>

<body>

    @include('frontEnd.components.navbar')

    @yield('bodyContent')

    @include('frontEnd.components.footer')

    <div class="container SweepTop">
        <a href="#" class="d-none pulse" id="InTop"><i class="fa-solid fa-arrow-up-long"></i></a>
    </div>


    @include('frontEnd.components.script')



</body>

</html>