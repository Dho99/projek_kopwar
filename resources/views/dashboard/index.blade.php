@extends('layouts/main')

@include('partials/header')
@include('partials/sidebar')
@section('container-fluid')
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 my-2">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>
    
      <div class="row text-white g-3">

        <div class="col-lg-3">
            <div class="container bg-primary rounded p-3">
                <h3 class="fs-4">Pinjaman</h3>
                    <div>Rp. {{$total_pinjaman}},00 </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="container bg-primary rounded p-3">
                <h3 class="fs-4">Simpanan</h3>
                    <div>Rp. {{$total_simpanan}},00 </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="container bg-primary rounded p-3">
                <h3 class="fs-4">Anggota</h3>
                    <div>{{$total_anggota}} </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="container bg-primary rounded p-3">
                <h3 class="fs-4">Simpanan</h3>
                    <div>Rp. {{$total_simpanan}},00 </div>
            </div>
        </div>
        
        
      </div>



    </div>






    
   


    @endsection
