@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        @livewire('data-spop')
        @livewire('detail-spop', ['id' => $id])
    </div>
@endsection
