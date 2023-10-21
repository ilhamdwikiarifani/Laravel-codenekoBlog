<div class="container-fluid bg-white">
    <div class="container py-4 d-none d-lg-flex">
        <a class="navbar-brand" href="#"><img src={{ asset('images/logo/codeneko-black.png') }} alt="logo"
                class="logo-size"></a>
    </div>
</div>

<div class="container-fluid bg-white border">
    <div class="container ">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand d-lg-none" href="#"><img src={{ asset('images/logo/codeneko-black.png') }} alt="logo"
                    class="logo-size"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item me-2 mb-2 mb-lg-0 ">
                        <a class="nav-link {{ (request()->is('admin*')) ? 'adminActive' : '' }}" aria-current="page"
                            href={{ url('admin') }}> <i class="fa-regular fa-folder-closed me-2"></i>Dashboard</a>
                    </li>
                    <li class="nav-item me-2 mb-2 mb-lg-0 ">
                        <a class="nav-link {{ (request()->is('post')) ? 'adminActive' : '' }}" href={{ url('post') }}><i
                                class="fa-regular fa-clone me-2"></i>Posts</a>
                    </li>
                    <li class="nav-item me-2 mb-2 mb-lg-0 ">
                        <a class="nav-link {{ (request()->is('kategori*')) ? 'adminActive' : '' }}" href={{
                            url('kategori') }}><i class="fa-solid fa-k me-2"></i>Kategori Post</a>
                    </li>
                    <li class="nav-item me-2 mb-2 mb-lg-0">
                        <a class="nav-link" href="#"><i class="fa-solid fa-code-fork me-2"></i>Works</a>
                    </li>

                </ul>
                <form class="d-flex" method="POST">
                    @csrf
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <div class="d-flex justify-content-center align-items-center" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="hero-user-admin bg-success text-white"> <i class="fa-brands fa-npm"></i>
                                </div>
                                <a class="nav-link dropdown-toggle" href="#">
                                    {{ Auth::user()->username}} <i class="fa-solid fa-chevron-down text-11px ms-1"></i>
                                </a>
                            </div>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="fa-regular fa-circle-user me-2"></i> {{
                                        Auth::user()->usertag}}</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa-regular fa-envelope me-2"></i> {{
                                        Auth::user()->email}}</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="logout"><i
                                            class="fa-solid fa-arrow-right-from-bracket me-2"></i>Logout</a></li>

                            </ul>
                        </li>
                    </ul>
                </form>
            </div>
        </nav>
    </div>
</div>