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


{{-- Modal button --}}
<a class="" href="#"><i class="fa-solid fa-magnifying-glass me-3 px-3 py-2 border rounded text-11px"
        data-bs-toggle="modal" data-bs-target="#exampleModal"></i></a>