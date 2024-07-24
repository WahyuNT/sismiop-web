@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        @livewire('ubah-data-akun', ['id' => $id])
    </div>
@endsection
