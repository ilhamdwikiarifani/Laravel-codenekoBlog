<div class="container-fluid">
    <div class="container hero-wraper rounded py-lg-2 py-1 px-2">
        <div class="d-flex justify-content-start align-items-center">
            <div class="px-2 px-lg-3 py-1 bg-blue text-white rounded text-15px">Trending:</div>
            <div id="carouselExampleAutoplaying" class="carousel slide px-2 px-lg-4" data-bs-ride="carousel">
                <div class="carousel-inner">

                    @foreach ($workTrending as $key => $datas)
                    <div class="carousel-item  {{ $key == 0 ? 'active' : '' }}  ">
                        <a href="berita/{{ $datas->slug }}" class="underlined text-15px">
                            {{ Str::limit($datas->title, 30) }}
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


        <div class="d-none d-lg-flex gap-2 p-0">
            <a class="carousel-next bg-btn carousel-button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <i class="fa-solid fa-arrow-left text-11px  text-arrow"></i>
            </a>
            <a class="carousel-next bg-btn  carousel-button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next"> <i class="fa-solid fa-arrow-right text-11px  text-arrow"></i> </a>
        </div>
    </div>
</div>