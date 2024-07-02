@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="title ">
                        <h3><b>DATA SPOP</b></h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-elements-wrapper">
            <div class="row">
                <div class="card card-form">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">No Formulir</th>
                                <th scope="col">Petugas Pendata</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>FO213421</td>
                                <td>John Doe</td>
                                <td>24-12-2024</td>
                                <td class="text-center"><button class="btn btn-primary rounded-pill mx-1">Detail</button>
                                    <button class="btn btn-warning rounded-pill mx-1">Edit</button>
                                    <button class="btn btn-danger rounded-pill mx-1">Hapus</button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
