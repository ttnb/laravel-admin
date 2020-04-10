@extends('laraveladmin::app')
@section('title', 'Admin Dashboard')
@section('header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Fixed Navbar Layout</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Layout</a></li>
                    <li class="breadcrumb-item active">Fixed Navbar Layout</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@stop
@section('content')

@stop
@push('css')

@endpush
@push('js')

@endpush