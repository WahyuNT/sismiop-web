@extends('layouts.master')
@section('content')
    <div class="container-fluid">

        @livewire('detail-spop', ['id' => $id])
    </div>
@endsection
