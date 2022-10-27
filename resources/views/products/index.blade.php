@extends('layouts/main')

@include('partials/header')
@include('partials/sidebar')
@section('container-fluid')
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 my-2">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Stok Produk</h1>
        </div>

        <div class="row g-4">
            @foreach($products as $product)
            <div class="col-lg-3">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->nama_produk }}</h5>
                        <p class="card-text">{{ $product->harga }}</p>
                        <hr>
                            <div class="d-flex h-3px justify-content-center">
                                <a href="#" class="btn bg-secondary align-items-center me-2"><span data-feather="minus-circle"></span></a>
                                <form action="">
                                    <input type="text" name="" id="" class="form-control h-3px w-10px text-center" value="{{ $product->jumlah_produk }}">
                                </form>
                                <a href="#" class="btn bg-warning align-items-center ms-2"><span data-feather="plus-circle"></span></a>
                            </div>
                    </div>
                </div>
            </div>

            @endforeach

                <button class="btn btn-primary sticky-bottom w-100"><a href="" class="text-light text-decoration-none">Tambah Data Barang Baru</a></button>
         
        </div>
    
        
        
    </div>






    
   


    @endsection
