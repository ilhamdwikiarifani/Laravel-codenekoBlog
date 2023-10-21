<div class="container-fluid">
    <div class="container mt-4 p-lg-0">
        <div id="carouselExampleAutoplayingHero" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                @foreach ($post as $key => $datas)
                {{-- Carousel Hero 1 START--}}

                <div class="carousel-item {{ $key == 0 ? 'active' : '' }} hero-body wow slideInLeft"
                    data-wow-duration="1.3s">
                    <div class=" d-block d-lg-flex justify-content-between align-items-center">
                        <div class="p-lg-5 hero-width">
                            <div class="text-15px mb-3 d-flex justify-content-start align-items-center">
                                <div class="hero-user bg-danger text-white"> <i
                                        class="fa-solid fa-fire-flame-curved"></i>
                                </div>
                                <div><span class="fw-bold me-1">{{ $datas->user->username }}</span> <svg
                                        aria-label="Verified" class="x1lliihq x1n2onr6" color="rgb(0, 149, 246)"
                                        fill="rgb(0, 149, 246)" height="14" role="img" viewBox="0 0 40 40" width="14">
                                        <title>Verified</title>
                                        <path
                                            d="M19.998 3.094 14.638 0l-2.972 5.15H5.432v6.354L0 14.64 3.094 20 0 25.359l5.432 3.137v5.905h5.975L14.638 40l5.36-3.094L25.358 40l3.232-5.6h6.162v-6.01L40 25.359 36.905 20 40 14.641l-5.248-3.03v-6.46h-6.419L25.358 0l-5.36 3.094Zm7.415 11.225 2.254 2.287-11.43 11.5-6.835-6.93 2.244-2.258 4.587 4.581 9.18-9.18Z"
                                            fill-rule="evenodd"></path>
                                    </svg></div>

                                <div class="mx-1">•</div>
                                <div>{{ $datas->created_at->diffForHumans() }}</div>
                            </div>

                            <a class="h1 underlined fw-bold" href="berita/{{ $datas->slug }}">{{
                                Str::limit($datas->title,
                                50) }}</a>
                            <p class="mt-1 font-inter text-gray text-15px">{{ strip_tags($datas->excerpt) }}</p>
                            <div class="text-14px my-3 d-flex justify-content-start align-items-center">
                                <div class="text-red">{{ $datas->kategori->title }}</div>
                                <div class="mx-2">•</div>
                                <div>{{ $datas->created_at->translatedFormat('l, d M Y') }}</div>
                            </div>
                        </div>
                        <div class="hero-img position-relative">
                            <p class="hero-thumb">Works</p>
                            <img src={{ asset('storage/'.$datas->foto) }} class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                {{-- Carousel Hero 1 END --}}
                @endforeach

            </div>
            <div class="carousel-hero-prev" type="button" data-bs-target="#carouselExampleAutoplayingHero"
                data-bs-slide="prev">
                <i class="fa-solid fa-arrow-left hero-arrow "></i>
            </div>
            <div class="carousel-hero-next" type="button" data-bs-target="#carouselExampleAutoplayingHero"
                data-bs-slide="next">
                <i class="fa-solid fa-arrow-right hero-arrow "></i>
            </div>
        </div>
    </div>
</div>