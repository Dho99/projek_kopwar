@extends('layouts/main')
@include('partials/header')
@include('partials/sidebar')

@section('container-fluid')
<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2">
        <h1 class="h2">Daftar Anggota</h1>
        
    </div>
    <form class="d-flex mb-5" role="search">
       <input class="form-control me-2" type="search" placeholder="Cari Anggota" aria-label="Search">
       <button class="btn btn-outline-success" type="submit">Cari</button>
    </form>
    <div class="row fw-bold">
        <div class="col-lg-4 ms-2">
            <p>NIUPTK</p>
        </div>
        <div class="col-lg-5 ms-1">
            <p>Nama Anggota</p>
        </div>
        <div class="col-lg-2 ms-1">
            <p>Aksi</p>
        </div>
    </div>
@foreach ($members as $member)
<div class="card my-2">
    <div class="card-body box">
        <div class="row">
            <div class="col-lg-4">{{ $member->niuptk }}</div>
            <div class="col-lg-5">
                <img src="" alt="Foto Profil" class="rounded">
                 {{ $member->name }}
            </div>
            <div class="col-lg-2">
                <button class="btn btn-secondary"> 
                    <a href="/edit" class="text-light"><span data-feather="edit"></span></a>
                </button>
                <button class="btn btn-secondary"> 
                   <a href="/info" class="text-light"><span data-feather="info"></span></a>
                </button>
            </div>
        </div>
    </div>
</div>

@endforeach


            <button class="btn btn-primary w-100 sticky-bottom my-4 align-items-center"><a href="/register" class="text-light text-decoration-none"><span data-feather="plus-circle" class="mb-1"></span> Tambah Anggota </a></button>
    </div>
@endsection