@extends('backEnd.index')


@section('adminContent')

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
                <form method="GET" action={{ route('kategori.index')}}>
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
                <p class="text-11px">Search <span class="text-blue fw-bold text-12px">Kategori Post</span></p>
            </div>
        </div>
    </div>
</div>
{{-- Search Modal End --}}


<div class="container-fluid">

    <div class="container mt-3 bg-white border p-3 rounded-top">
        <div class="d-flex justify-content-between align-items-center px-2">
            <p class="p-0 m-0 h5">Kategori Post</p>
            <div>
                <a class="cursor-pointer"><i
                        class="fa-solid fa-magnifying-glass me-3 px-3 py-2 border rounded text-11px"
                        data-bs-toggle="modal" data-bs-target="#exampleModal"></i></a>
                <a href={{ url('kategori/create') }}><i class="fa-solid fa-plus"></i></a>
            </div>

        </div>
    </div>

    @include('backEnd.components.messageModal')

    @foreach ($kategori as $datas)

    <div class="container  bg-white border p-3 py-3 " style="margin-top: -1px">
        <div class="d-flex justify-content-between align-items-center px-2">
            <div>
                <div class="text-15px d-flex justify-content-start align-items-center">

                    <div>
                        <span class=" me-1  fw-bold">{{ $datas->title }}</span>

                        <div class="text-14px d-flex justify-content-start align-items-center opacity-75">
                            <div>Published by SuperAdmin</div>
                            <div class="mx-2">·</div>
                            <div>{{ $datas->created_at->translatedFormat('l, d M Y') }}</div>
                            <div class="mx-2">·</div>
                            <div class="text-red">{{ $datas->created_at->translatedFormat('H:i - A') }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <form class="d-flex" method="POST" action={{ route('kategori.destroy', $datas->id) }}>


                @include('backEnd.components.confirmModal')

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown ">
                        <div class="d-flex justify-content-center align-items-center" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <a class="nav-link dropdown-toggle" href="#">
                                <i class="fa-solid fa-ellipsis px-2 py-1 border rounded"></i>
                            </a>
                        </div>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-blue bg-white" href={{ route('kategori.show', $datas->id)
                                    }}><i class="fa-solid fa-eye me-2"></i>
                                    View</a></li>
                            <li><a class="dropdown-item text-kuning bg-white" href={{ route('kategori.edit', $datas->id)
                                    }}><i class="fa-regular fa-pen-to-square me-2"></i>Edit</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item  bg-white text-red" href="" data-bs-toggle="modal"
                                    data-bs-target="#modalDelete"> <i class="fa-regular fa-trash-can me-2"></i>
                                    Delete</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </form>
        </div>
    </div>
    @endforeach

    <div class="container bg-white border rounded-bottom pt-3 pe-4" style="margin-top: -1px">
        <div class="d-flex justify-content-end align-items-center p-0">
            {{ $kategori->links() }}
        </div>
    </div>


</div>
@endsection