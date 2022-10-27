@extends('layouts/main')

@include('partials/header')
@include('partials/sidebar')
@section('container-fluid')
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 my-2">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>
    
      <div class="row text-white g-3">
        <div class="col-md-6">
            <div class="container bg-primary rounded p-3">
                <h3 class="my-3 mx-3">Pinjaman</h3>
                    <table class="table border-primary text-white fs-6 my-4 mx-3">
                        <tr>
                            <th>Total</th>
                            <td>Rp xxx.xxx,00</td>
                        </tr>
                        <tr>
                            <th>Pengguna</th>
                            <td>xx Pengguna</td>
                        </tr>
                        <tr>
                            <th>Jumlah Terbayar</th>
                            <td>Rp xxx.xxx,00</td>
                        </tr>
                        <tr>
                            <th>Jumlah Tunggakan</th>
                            <td>Rp xxx.xxx,00</td>
                        </tr>

                    </table>
            </div>
        </div>
        <div class="col-md-6">
            <div class="container bg-primary rounded p-3">
                <h3 class="my-3 mx-3">Simpanan</h3>
                    <table class="table border-primary text-white fs-6 my-4 mx-3">
                        <tr>
                            <th>Total</th>
                            <td>Rp xxx.xxx,00</td>
                        </tr>
                        <tr>
                            <th>Pengguna</th>
                            <td>xx Pengguna</td>
                        </tr>
                        <tr>
                            <th>Jumlah Simpanan</th>
                            <td>Rp xxx.xxx,00</td>
                        </tr>
                        <tr>
                            <th>Simpanan Pokok</th>
                            <td>Rp xxx.xxx,00</td>
                        </tr>

                    </table>
            </div>
        </div>
      </div>


    <div class="bg-grey container-fluid rounded mt-4">
            <p class="text-center red-heart fs-4 fw-bold pt-4">Grafik Penggunaan Layanan Koperasi</p> 
            
            <div class="btn-toolbar mb-2 mb-2 pe-3">
                <div class="btn-group ms-auto">
                    <button type="button" class="btn btn-sm btn-outline-secondary me-1">Export</button>
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar" class="align-text-bottom"></span>
                    This week
                </button>
                </div>     
            <div class="container-fluid mt-1 pb-4 d-flex justify-content-center">
                <canvas id="myChart" class="dashboard-canvas">
                    <script>
                        var xValues = [100,200,300,400,500,600,700,800,900,1000];

                        new Chart("myChart", {
                        type: "line",
                        data: {
                            labels: xValues,
                            datasets: [{
                                data: [860,1140,1060,4960,1070,1110,1330,2210,7830,2478],
                                borderColor: "red",
                                label: "Simpan",
                                fill: false 
                                },{
                                data: [1600,1700,1700,3000,2000,2700,4000,5000,6000,7000],
                                borderColor: "green",
                                label: "Pinjam",
                                fill: false
                                }]
                        }, 
                        options: {
                            responsive: true,
                            plugins: {
                            legend: {
                                position: 'top',
                            },
                            }
                        },       
                        });

                        
                    </script>
        
                </canvas>
            </div>
    </div>


    </div>






    
   


    @endsection
