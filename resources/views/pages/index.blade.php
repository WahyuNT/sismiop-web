@extends('layouts.master')
@section('content')
    <div class="container-fluid pt-5">
        <div class="d-flex flex-wrap ">
            <div class="col-lg-2 px-2 col-6">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="mb-2 text-center">Data SPOP</h5>
                        <a href="{{ route('data.spop') }}"style="all:unset">
                            <button class="btn btn-primary w-100 rounded-pill">Buka</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 px-2 col-6">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="mb-2 text-center">Data LSPOP</h5>
                        <a href="{{ route('data.lspop') }}"style="all:unset">
                            <button class="btn btn-primary w-100 rounded-pill">Buka</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 px-2 col-6">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="mb-2 text-center">Tambah SPOP</h5>
                        <a href="{{ route('tambah.spop') }}"style="all:unset">
                            <button class="btn btn-primary w-100 rounded-pill">Buka</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 px-2 col-6">
                <div class="card border-0">
                    <div class="card-body">
                        <h5 class="mb-2 text-center">Tambah LSPOP</h5>
                        <a href="{{ route('tambah.lspop') }}"style="all:unset">
                            <button class="btn btn-primary w-100 rounded-pill">Buka</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
