@extends('backEnd.index')

@section('adminContent')

<div class="container-fluid">

    <div class="container mt-3 bg-white border p-3 rounded-top">
        <div class="d-flex justify-content-between align-items-center px-2">
            <p class="p-0 m-0 h5">Create Post</p>
            <a href={{ url('post') }}><i class="fa-solid fa-arrow-left-long "></i></a>
        </div>
    </div>
    <div class="container  bg-white border p-3 py-4 rounded-bottom" style="margin-top: -1px">
        <form action={{ route('post.store') }} method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row px-2">
                <div class="mb-3 col-lg-6">
                    <label for="exampleFormControlTextarea1" class="form-label">Kategori Post</label>
                    <select class="form-select" name="kategoriId">
                        @foreach ($kategori as $datas)

                        @if (old('kategoriId') == $datas->id)
                        <option value="{{ $datas->id }}" selected>{{ $datas->title }}</option>
                        @else
                        <option value="{{ $datas->id }}">{{ $datas->title }}</option>
                        @endif

                        @endforeach
                    </select>
                    @error('kategoriId')
                    <div class="alert alert-danger mt-2 py-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 col-lg-6">
                    <label for="exampleFormControlTextarea1" class="form-label">Status</label>
                    <select class="form-select" name="statusId">
                        @foreach ($status as $datas)

                        @if (old('statusId') == $datas->id)
                        <option value="{{ $datas->id }}" selected>{{ $datas->name }}</option>
                        @else
                        <option value="{{ $datas->id }}">{{ $datas->name }}</option>
                        @endif

                        @endforeach
                    </select>
                    @error('statusId')
                    <div class="alert alert-danger mt-2 py-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 col-lg-12">
                    <label for="exampleFormControlTextarea1" class="form-label">Foto Post</label>
                    <input type="file" class="form-control @error('foto') is-invalid @enderror"
                        id="exampleFormControlInput1" name="foto" required>
                    @error('foto')
                    <div class="alert alert-danger mt-2 py-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 col-lg-12">
                    <label for="exampleFormControlTextarea1" class="form-label">Judul Post</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                        id="exampleFormControlInput1" placeholder="Title of Post" name="title"
                        value="{{ old('title') }}" required>
                    @error('title')
                    <div class="alert alert-danger mt-2 py-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 col-lg-12">
                    <label for="exampleFormControlTextarea1" class="form-label">Text Post</label>
                    <textarea name="body" class="form-control @error('body') is-invalid @enderror"
                        placeholder="Body of Post"></textarea>
                    @error('body')
                    <div class="alert alert-danger mt-2 py-2">{{ $message }}</div>
                    @enderror
                </div>


                <div class="d-flex justify-content-end align-items-center">
                    <button type="submit" class="px-3 py-2 bg-blue border text-white rounded">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection