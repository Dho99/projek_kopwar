@extends('layouts/main')

@section('container')
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 my-2">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button>
        </div>
      </div>
    
      <div class="row text-white">
        <div class="col-md-6">
            <div class="container bg-success rounded p-3">
                <h3 class="my-3 mx-3">Pinjaman</h3>
                    <table class="table border-success text-white fs-6 my-4 mx-3">
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



      <div class="container-fluid mt-6 d-flex justify-content-center">
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
                    title: {
                        display: true,
                        text: 'Grafik Pengguna Layanan Koperasi',
                        font: {
                            size: 20,
                            family: 'Poppins',
                        }
                    }
                    }
                },       
                });

                
            </script>
 
        </canvas>
      </div>



    </div>






    
   


    @endsection
