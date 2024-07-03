@extends('layouts.master')
@section('content')
    <div class="container-fluid">

        @livewire('detail-lspop', ['id' => $id])
    </div>
@endsection
