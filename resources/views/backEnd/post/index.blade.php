@extends('backEnd.index')


@section('adminContent')

<div class="container-fluid">

    <div class="container mt-3 bg-white border p-3 rounded-top">
        <div class="d-flex justify-content-between align-items-center px-2">
            <p class="p-0 m-0 h5">Post</p>
            <div>
                <a href={{ url('post/create') }}
                    class="px-3 py-2 bg-blue text-white text-decoration-none rounded text-12px"><i
                        class="fa-solid fa-plus me-2"></i> Create Post</a>
            </div>

        </div>
    </div>

    @include('backEnd.components.messageModal')



    <div class="container bg-white border p-3 py-3 " style="margin-top: -1px; ">
        <div class="table-responsive py-1 overflow-hidden" style="height:100%;">
            <table id="example" class="table table-borderless" style="width:100%">
                <thead>
                    <tr class="t-head">
                        <th>Image</th>
                        <th>Title</th>
                        <th>Published</th>
                        <th>Kategori</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($post as $datas)
                    @if ($datas->user->is(auth()->user()))
                    <tr>
                        <td>
                            <div class="hero-post-admin border-1"> <img src={{ asset('storage/'.$datas->foto)
                                }} alt="img">
                            </div>
                        </td>
                        <td>{{ Str::limit($datas->title, 25) }}</td>
                        <td>{{ Str::limit($datas->user->username, 20) }}</td>
                        <td>
                            <a href={{ url('category', $datas->kategori->title) }} class="text-red
                                text-decoration-none">{{
                                $datas->kategori->title }}</a>
                        </td>
                        <td>{{ $datas->created_at->translatedFormat('l, d M Y : H:i') }}</td>
                        <td>@if($datas->status->name == 'Unpublish')
                            <div class="badge bg-red fw-normal border-0"> <a href={{ url('status', $datas->status->name)
                                    }}
                                    class="text-decoration-none text-white text-10px"><i
                                        class="fa-solid fa-eye-slash me-1"></i> {{ $datas->status->name }}</a>
                            </div>
                            @elseif ($datas->status->name == 'Publish')
                            <div class="badge bg-success fw-normal border-0"> <a href={{ url('status',
                                    $datas->status->name) }}
                                    class="text-decoration-none text-white text-10px"><i
                                        class="fa-solid fa-upload me-1"></i> {{ $datas->status->name }}</a>
                            </div>
                            @elseif ($datas->status->name == 'Star')
                            <div class="badge bg-warning fw-normal border-0"> <a href={{ url('status',
                                    $datas->status->name) }}
                                    class="text-decoration-none text-white text-10px"><i
                                        class="fa-solid fa-star me-1"></i> {{
                                    $datas->status->name }}</a>
                            </div>
                            @endif
                        </td>
                        <td>

                            <form class="d-flex" method="POST" action={{ route('post.destroy', $datas->id) }}>
                                @include('backEnd.components.confirmModal')

                                <ul class="navbar-nav me-auto ">
                                    <li class="nav-item dropdown ">

                                        <div role="button" data-bs-toggle="dropdown" aria-expanded="false"
                                            class="badge border-0"> <a href=""
                                                class="text-decoration-none text-dark text-10px"><i
                                                    class="fa-solid fa-ellipsis px-2 py-1 border rounded"></i></a>
                                        </div>

                                        <ul class="dropdown-menu z-10">
                                            <li><a class="dropdown-item text-blue bg-white" href={{ route('post.show',
                                                    $datas->id)
                                                    }}><i class="fa-solid fa-eye me-2"></i>
                                                    View</a></li>
                                            <li><a class="dropdown-item text-kuning bg-white" href={{ route('post.edit',
                                                    $datas->id)
                                                    }}><i class="fa-regular fa-pen-to-square me-2"></i>Edit</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item  bg-white text-red" href=""
                                                    data-bs-toggle="modal" data-bs-target="#modalDelete"> <i
                                                        class="fa-regular fa-trash-can me-2"></i>
                                                    Delete</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </form>

                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

    {{-- <div class="container  bg-white border p-3 py-3 " style="margin-top: -1px">
        <div class="d-flex justify-content-between align-items-center px-2">
            <div>
                <div class="text-15px d-flex justify-content-start align-items-center">
                    <div class="hero-post-admin bg-white text-blue border d-none d-lg-flex "> <img src={{
                            asset('storage/'.$datas->foto) }} alt="img">
                    </div>
                    <div>
                        <span class=" me-1  fw-bold">{{ Str::limit($datas->title, 55) }}</span>

                        <div class="text-14px d-flex justify-content-start align-items-center opacity-75">

                            @if($datas->status->name == 'Unpublish')
                            <div class="badge bg-red fw-normal border-0"> <a href={{ url('status', $datas->status->name)
                                    }}
                                    class="text-decoration-none text-white">{{ $datas->status->name }}</a>
                            </div>
                            @elseif ($datas->status->name == 'Publish')
                            <div class="badge bg-success fw-normal border-0"> <a href={{ url('status',
                                    $datas->status->name) }}
                                    class="text-decoration-none text-white">{{ $datas->status->name }}</a>
                            </div>
                            @endif

                            <div class="mx-2">·</div>
                            <div>Post by {{ $datas->user->username }}</div>
                            <div class="mx-2">·</div>
                            <div><a href={{ url('category', $datas->kategori->title) }} class="text-red
                                    text-decoration-none">{{
                                    $datas->kategori->title }}</a></div>
                            <div class="mx-2">·</div>
                            <div>{{ $datas->created_at->translatedFormat('l, d M Y') }}</div>
                            <div class="mx-2">·</div>
                            <div class="">{{ $datas->created_at->translatedFormat('H:i - A') }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <form class="d-flex" method="POST" action={{ route('post.destroy', $datas->id) }}>
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
                            <li><a class="dropdown-item text-blue bg-white" href={{ route('post.show', $datas->id)
                                    }}><i class="fa-solid fa-eye me-2"></i>
                                    View</a></li>
                            <li><a class="dropdown-item text-kuning bg-white" href={{ route('post.edit', $datas->id)
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
    </div> --}}


</div>



@endsection