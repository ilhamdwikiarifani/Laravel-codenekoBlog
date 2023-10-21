@extends('backEnd.index')

@section('adminContent')

<div class="container-fluid">

    <div class="container mt-3 bg-white border p-3 rounded-top">
        <div class="d-flex justify-content-between align-items-center px-2">
            <p class="p-0 m-0 h5">Detail Post</p>
            <a href={{ url('post') }}><i class="fa-solid fa-arrow-left-long "></i></a>
        </div>
    </div>
    <div class="container  bg-white border p-3 py-4 rounded-bottom" style="margin-top: -1px">
        <form method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row px-2">
                <div class="mb-3 col-lg-10">
                    <label for="exampleFormControlTextarea1" class="form-label">Kategori Post</label>
                    <select class="form-select" name="kategoriId" disabled>
                        <option>{{ $post->kategori->title }}</option>
                    </select>
                </div>

                <div class="mb-3 col-lg-2">
                    <label for="exampleFormControlTextarea1" class="form-label">Foto Post</label>
                    <div class="hero-post-admin-show bg-white text-blue border d-none d-lg-flex "> <img src={{
                            asset('storage/'.$post->foto) }}
                        alt="img">
                    </div>
                </div>

                <div class="mb-3 col-lg-12">
                    <label for="exampleFormControlTextarea1" class="form-label">Judul Post</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="title"
                        value="{{ $post->title }}" disabled>
                </div>

                <div class="mb-3 col-lg-12">
                    <label for="exampleFormControlTextarea1" class="form-label">Text Post</label>
                    <textarea name="body" class="form-control" disabled>{{ $post->body }}</textarea>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection