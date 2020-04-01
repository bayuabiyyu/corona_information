<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Halaman Utama</title>
        <link href="{{ asset('resources') }}/dist/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Siscov-19</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            {{-- <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form> --}}
            <!-- Navbar-->
            {{-- <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul> --}}
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link active" href="{{ route('halaman_utama') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Halaman Utama
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Website Developed by</div>
                        Ahmad Husain Abiyyu
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Halaman Utama</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active text-center">SELAMAT DATANG DI SISTEM INFORMASI COVID-19 VERSI INDONESIA</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Total Pasien Positif (Indonesia)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="text-white stretched-link" href="#">{{ str_replace(',', '', $response['data_total_indonesia'][0]['positif']) }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Pasien Sembuh (Indonesia)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="text-white stretched-link" href="#">{{ $response['data_total_indonesia'][0]['sembuh'] }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Total Pasien Meninggal (Indonesia)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="text-white stretched-link" href="#">{{ $response['data_total_indonesia'][0]['meninggal'] }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Pasien Aktif (Indonesia)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="text-white stretched-link" href="#">{{ (int)str_replace(',', '', $response['data_total_indonesia'][0]['positif']) -  (int)$response['data_total_indonesia'][0]['sembuh'] - (int)$response['data_total_indonesia'][0]['meninggal'] }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Area Chart Example</div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Bar Chart Example</div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i> Data penderita COVID-19 di indonesia berdasarkan provinsi</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover" id="data_provinsi" width="100%" cellspacing="0">
                                    <caption>* Data diambil dari pihak ke-3 yang terintegrasi dengan kemenkes</caption>
                                        <thead>
                                            <tr class="bg-dark text-white text-center">
                                                <th>No.</th>
                                                <th>Provinsi</th>
                                                <th>Positif</th>
                                                <th>Sembuh</th>
                                                <th>Meninggal</th>
                                                <th>Pasien Aktif</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($response['data_provinsi'] as $item)
                                            <tr class="{{ $loop->iteration <= 10 ? 'bg-danger text-white' : 'bg-success text-white' }}">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item['attributes']['Provinsi'] }}</td>
                                                <td>{{ $item['attributes']['Kasus_Posi'] }}</td>
                                                <td>{{ $item['attributes']['Kasus_Semb'] }}</td>
                                                <td>{{ $item['attributes']['Kasus_Meni'] }}</td>
                                                <td>{{ $item['attributes']['Kasus_Posi'] - $item['attributes']['Kasus_Semb'] - $item['attributes']['Kasus_Meni'] }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr class="bg-dark text-white">
                                                <th colspan="2" class="text-center">TOTAL KESELURUHAN </th>
                                                <th>{{ array_sum( array_column(array_column($response['data_provinsi'], 'attributes'), 'Kasus_Posi') ) }}</th>
                                                <th>{{ array_sum( array_column(array_column($response['data_provinsi'], 'attributes'), 'Kasus_Semb') ) }}</th>
                                                <th>{{ array_sum( array_column(array_column($response['data_provinsi'], 'attributes'), 'Kasus_Meni') ) }}</th>
                                                <th>{{ array_sum( array_column(array_column($response['data_provinsi'], 'attributes'), 'Kasus_Posi') ) - array_sum( array_column(array_column($response['data_provinsi'], 'attributes'), 'Kasus_Semb') ) - array_sum( array_column(array_column($response['data_provinsi'], 'attributes'), 'Kasus_Meni') ) }}</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Ahmad Husain Abiyyu 2020</div>
                            <div>
                               Version <a href="#">1.0.0</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('resources') }}/dist/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        {{-- <script src="{{ asset('resources') }}/dist/assets/demo/chart-area-demo.js"></script> --}}
        {{-- <script src="{{ asset('resources') }}/dist/assets/demo/chart-bar-demo.js"></script> --}}
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>

        <script>
            $(document).ready(function(){
                $('#data_provinsi').dataTable({
                    "pageLength": 50
                });
            });

        </script>

    </body>
</html>
