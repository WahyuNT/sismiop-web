@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="d-flex mt-3 align-items-center">
            <div class="col-1 pe-5">

                <div class="card bg-transparent border-0  ">
                    <a style="all: unset" href="{{ route('berita.index') }}">

                        <button class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i></button>
                    </a>
                </div>
            </div>
            <div class="col">
                <h4 class="text-center fw-bold m-0">Edit {{ $data->judul }}</h4>
            </div>
        </div>
        <div>
            <div class="card card-form mt-3">
                <form action="{{ route('berita.updateStore') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <input hidden type="text" name="id" value="{{ $data->id }}">
                        <div class="div">
                            <div class="mb-3">
                                <label for="judul" class="form-label  ">Judul</label>
                                <input required value="{{ $data->judul }}" required type="text" class="form-control"
                                    name="judul">
                                @error('judul')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="deksripsi" class="form-label  ">Deskripsi</label>
                                <div>
                                    <textarea required class="min-h-fit h-48 " name="isi" id="isi">{{ $data->isi }}</textarea>
                                </div>
                                @error('isi')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">

                            </div>
                            <div class="mb-3">
                                <label for="Gambar" class="form-label  ">Gambar <small>(Max
                                        4MB)</small> </label><br>
                                <img class="rounded" height="200px" src="{{ asset('img/berita/' . $data->nama_gambar) }}"
                                    alt="">
                                <input value="nama_gambar" name="nama_gambar" type="file" class="form-control mt-3">
                                @error('nama_gambar')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary rounded-pill mt-3">Perbarui Data</button>
                        </div>
                    </div>
                </form>
            </div>


        </div>

    </div>
    <script>
        ClassicEditor
            .create(document.querySelector('#isi'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
