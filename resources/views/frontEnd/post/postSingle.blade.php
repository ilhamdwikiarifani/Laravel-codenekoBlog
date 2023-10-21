@extends('frontEnd.index')

@section('bodyContent')

<div class="container single-container">

    <div class="text-14px my-3 d-flex justify-content-start align-items-center">
        <div class="text-red">{{ $post->kategori->title }}</div>
        <div class="mx-2">•</div>
        <div>{{ $post->created_at->translatedFormat('l, d M Y') }}</div>
    </div>

    <p class="h2">{{ $post->title }}</p>

    {{-- User --}}
    <div class="text-15px mt-4 d-flex justify-content-start align-items-center">
        <div class="hero-user-single bg-warning text-white"> <i class="fa-brands fa-npm"></i> </div>
        <div>
            <span class="fw-bold me-1">{{ $post->user->username }}</span> <svg aria-label="Verified"
                class="x1lliihq x1n2onr6" color="rgb(0, 149, 246)" fill="rgb(0, 149, 246)" height="14" role="img"
                viewBox="0 0 40 40" width="14">
                <title>Verified</title>
                <path
                    d="M19.998 3.094 14.638 0l-2.972 5.15H5.432v6.354L0 14.64 3.094 20 0 25.359l5.432 3.137v5.905h5.975L14.638 40l5.36-3.094L25.358 40l3.232-5.6h6.162v-6.01L40 25.359 36.905 20 40 14.641l-5.248-3.03v-6.46h-6.419L25.358 0l-5.36 3.094Zm7.415 11.225 2.254 2.287-11.43 11.5-6.835-6.93 2.244-2.258 4.587 4.581 9.18-9.18Z"
                    fill-rule="evenodd"></path>
            </svg>
            <div>{{ $post->user->usertag }}</div>
        </div>
    </div>

    <div class="mt-4 hero-img-singlePost">
        <img src={{ asset('storage/'.$post->foto) }} class="d-block w-100" alt="...">
    </div>

    <div class="mt-3">
        {{ $post->body }}
    </div>
</div>

@endsection