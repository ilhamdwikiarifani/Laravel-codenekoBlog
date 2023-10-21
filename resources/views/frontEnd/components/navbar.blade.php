{{-- Search Modal Start--}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header p-0">
                <p class="m-0 ps-3"><span class="text-red text-20px">&#8226;</span><span
                        class="text-blue text-20px">&#8226;</span><span class="text-warning text-20px">&#8226;</span>
                </p>
            </div>
            <div class="modal-body p-2">
                <form method="GET" action={{ route('post.index')}}>
                    <div class="position-relative">
                        <i class="fa-solid fa-magnifying-glass position-absolute text-14px"
                            style="top: 12px;left:12px;"></i>
                        <input type="text" class="form-control" placeholder="Search ..." aria-label="search"
                            aria-describedby="basic-addon1" name="search" id="search" style="padding-left: 34px"
                            autofocus>
                    </div>
                </form>
            </div>
            <div class="modal-footer p-2">
                <p class="text-11px">Search <span class="text-blue fw-bold text-12px"> Post</span></p>
            </div>
        </div>
    </div>
</div>
{{-- Search Modal End --}}



<div class="container-fluid py-lg-2 py-2 border-bottom position-fixed z-3 bg-white  top-0" id="style-navbar">

    <nav class="container navbar navbar-expand-lg">
        <a class="navbar-brand" href="#"><img src={{ asset('images/logo/codeneko-black.png') }} alt="logo"
                class="logo-size"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=" text-15px">MENU <i class="fa-solid fa-bars mx-1"></i></span>

        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item  mx-lg-1 ">
                    <a class="nav-link text-15px underlined  {{ (request()->is('/*')) ? 'inActive' : '' }}"
                        aria-current="page" href={{ url('/') }}>Home</a>
                </li>
                <li class="nav-item  mx-lg-1 ">
                    <a class="nav-link text-15px underlined {{ (request()->is('post*')) ? 'inActive' : '' }}" href={{
                        url('post') }}>Posts</a>
                </li>
                <li class="nav-item  mx-lg-1 ">
                    <a class="nav-link text-15px underlined" href="#">Works</a>
                </li>
                <li class="nav-item  mx-lg-1 " data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <a class="nav-link text-15px underlined" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                </li>
                <div class="d-lg-none d-flex mt-3">
                    <a class="navbar-brand text-15px btn bg-dark text-white" href="#">Started Now!</a>
                    <a class="navbar-brand text-15px " href="#">Sign in</a>
                </div>
            </ul>
        </div>

        <div class="d-lg-inline-block d-none ">
            <a class="navbar-brand text-15px underlined" href="#">Sign In</a>
            <a class="navbar-brand text-15px btn bg-dark text-white mx-0" id="started" href={{ url('admin') }}>Started
                Now!</a>
        </div>

    </nav>
</div>