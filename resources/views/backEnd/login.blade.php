<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Codeneko | Login</title>

    <link rel="stylesheet" href={{ asset("css/bootstrap.css") }}>
    <link rel="stylesheet" href={{ asset("css/style.css") }}>

    <link rel="shortcut icon" href={{ asset("images/logo/icon.png") }} type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Spline+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <script src="https://kit.fontawesome.com/2952392494.js" crossorigin="anonymous"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

</head>

<body>
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
        <div class="container d-flex justify-content-center align-items-center">
            <form action="login" method="POST">
                @csrf
                <div class="mb-4">
                    <img src={{ asset('images/logo/codeneko-black.png') }} alt="logo" class="logo-size">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn bg-dark text-white form-control">Login</button>
            </form>
        </div>
    </div>

    <script src={{ asset('js/jquery.js') }}></script>
    <script src={{ asset("js/main.js") }}></script>
    <script src={{ asset("js/bootstrap.js") }}></script>
</body>

</html>