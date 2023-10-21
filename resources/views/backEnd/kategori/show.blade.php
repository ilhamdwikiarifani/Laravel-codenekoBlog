@extends('backEnd.index')

@section('adminContent')

<div class="container-fluid">

    <div class="container mt-3 bg-white border p-3 rounded-top">
        <div class="d-flex justify-content-between align-items-center px-2">
            <p class="p-0 m-0 h5">Detail Kategori Post</p>
            <a href={{ url('kategori') }}><i class="fa-solid fa-arrow-left-long "></i></a>
        </div>
    </div>
    <div class="container  bg-white border rounded-bottom p-3 py-4" style="margin-top: -1px">

        <div class="row px-2">
            <div class="mb-3 col-lg-12">
                <label for="exampleFormControlTextarea1" class="form-label">Judul Kategori</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="title"
                    value="{{ $kategori->title }}" disabled>
            </div>
        </div>

    </div>
</div>

@endsection