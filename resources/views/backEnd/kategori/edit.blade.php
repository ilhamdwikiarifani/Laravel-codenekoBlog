@extends('backEnd.index')

@section('adminContent')

<div class="container-fluid">

    <div class="container mt-3 bg-white border p-3 rounded-top">
        <div class="d-flex justify-content-between align-items-center px-2">
            <p class="p-0 m-0 h5">Edit Kategori Post</p>
            <a href={{ url('kategori') }}><i class="fa-solid fa-arrow-left-long "></i></a>
        </div>
    </div>
    <div class="container  bg-white border p-3 py-4" style="margin-top: -1px">
        <form action={{ route('kategori.update', $kategori->id) }} method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row px-2">
                <div class="mb-3 col-lg-12">
                    <label for="exampleFormControlTextarea1" class="form-label">Judul Kategori</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                        id="exampleFormControlInput1" placeholder="Youtube / Media Informasi / Video Inspiratif"
                        name="title" value="{{ $kategori->title }}" required>

                    @error('title')
                    <div class="alert alert-danger mt-2 py-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-flex justify-content-end align-items-center">
                    @method('PUT')
                    <button type="submit" class="px-3 py-2 bg-blue border text-white rounded">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection