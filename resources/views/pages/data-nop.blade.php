@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row d-flex flex-wrap mt-3">

            <div class="col-12 mb-3 col-lg-6">
                <div class="card card-form">

                    @livewire('data-provinsi')
                </div>
            </div>
            <div class="col-12 mb-3 col-lg-6">
                <div class="card card-form">

                    @livewire('data-kecamatan')
                </div>
            </div>
            <div class="col-12 mb-3 col-lg-6">
                <div class="card card-form">
                    @livewire('data-dati2')
                </div>
            </div>
        </div>
    @endsection
