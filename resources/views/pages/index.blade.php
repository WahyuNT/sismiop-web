@extends('layouts.master')
@section('content')
    <div class="container-fluid pt-lg-5 pt-3">
        <div class="d-flex flex-wrap ">
            <div class="col-lg-3 px-lg-3 px-2 mb-3 mb-lg-4 col-6">
                <div class="card card-dashboard py-3 border-0">
                    <div class="card-body ">
                        <div class="d-flex justify-content-center ">
                            <img src="{{ asset('img/spop.png') }}" class="img-dashboard" alt="">
                        </div>
                        <h5 class="mb-2 text-center mt-3">Data SPOP</h5>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('data.spop') }}">
                                <button class="btn btn-primary px-4  rounded-pill">Buka</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 px-lg-3 px-2 mb-3 mb-lg-4 col-6">
                <div class="card card-dashboard py-3 border-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-center ">
                            <img src="{{ asset('img/lspop.png') }}" class="img-dashboard" alt="">
                        </div>
                        <h5 class="mb-2 text-center mt-3">Data LSPOP</h5>

                        <div class="d-flex justify-content-center">
                            <a href="{{ route('data.lspop') }}">
                                <button class="btn btn-primary px-4  rounded-pill">Buka</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 px-lg-3 px-2 mb-3 mb-lg-4 col-6">
                <div class="card card-dashboard py-3 border-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-center ">
                            <img src="{{ asset('img/insert_spop.webp') }}" class="img-dashboard" alt="">
                        </div>
                        <h5 class="mb-2 text-center mt-3">Tambah Data SPOP</h5>

                        <div class="d-flex justify-content-center">
                            <a href="{{ route('tambah.spop') }}">
                                <button class="btn btn-primary px-4  rounded-pill">Buka</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 px-lg-3 px-2 mb-3 mb-lg-4 col-6">
                <div class="card card-dashboard py-3 border-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-center ">
                            <img src="{{ asset('img/insert_lspop.webp') }}" class="img-dashboard" alt="">
                        </div>
                        <h5 class="mb-2 text-center mt-3">Tambah Data LSPOP</h5>

                        <div class="d-flex justify-content-center">
                            <a href="{{ route('tambah.lspop') }}">
                                <button class="btn btn-primary px-4  rounded-pill">Buka</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 px-lg-3 px-2 mb-3 mb-lg-4 col-6">
                <div class="card card-dashboard py-3 border-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-center ">
                            <img src="{{ asset('img/berita.webp') }}" class="img-dashboard" alt="">
                        </div>
                        <h5 class="mb-2 text-center mt-3">Berita</h5>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('berita.index') }}">
                                <button class="btn btn-primary px-4  rounded-pill">Buka</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 px-lg-3 px-2 mb-3 mb-lg-4 col-6">
                <div class="card card-dashboard py-3 border-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-center ">
                            <img src="{{ asset('img/trash.webp') }}" class="img-dashboard" alt="">
                        </div>
                        <h5 class="mb-2 text-center mt-3">Data Terhapus</h5>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('data.terhapus') }}">
                                <button class="btn btn-primary px-4  rounded-pill">Buka</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @if ($user->role_id == 1)
                <div class="col-lg-3 px-lg-3 px-2 mb-3 mb-lg-4 col-6">
                    <div class="card card-dashboard py-3 border-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-center ">
                                <img src="{{ asset('img/buat_akun.webp') }}" class="img-dashboard" alt="">
                            </div>
                            <h5 class="mb-2 text-center mt-3">Buat Akun</h5>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('data.terhapus') }}">
                                    <button class="btn btn-primary px-4  rounded-pill">Buka</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 px-lg-3 px-2 mb-3 mb-lg-4 col-6">
                    <div class="card card-dashboard py-3 border-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-center ">
                                <img src="{{ asset('img/data_akun.webp') }}" class="img-dashboard" alt="">
                            </div>
                            <h5 class="mb-2 text-center mt-3">Data Akun</h5>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('data-akun') }}">
                                    <button class="btn btn-primary px-4  rounded-pill">Buka</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection
