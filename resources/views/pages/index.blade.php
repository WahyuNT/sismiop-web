@extends('layouts.master')
@section('content')
    <div class="container-fluid pt-5">
        <div class="d-flex flex-wrap ">
            <div class="col-lg-3 px-3 mb-4 col-6">
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
            <div class="col-lg-3 px-3 mb-4 col-6">
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
            <div class="col-lg-3 px-3 mb-4 col-6">
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
            <div class="col-lg-3 px-3 mb-4 col-6">
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
            <div class="col-lg-3 px-3 mb-4 col-6">
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
        </div>
    </div>
@endsection
