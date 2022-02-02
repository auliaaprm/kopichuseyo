@extends('layouts.app')
@push('css')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendors/css/forms/wizard/bs-stepper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendors/css/forms/select/select2.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/components.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/themes/dark-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/themes/bordered-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/themes/semi-dark-layout.min.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/core/menu/menu-types/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/plugins/charts/chart-apex.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/pages/app-invoice-list.min.css') }}">
@endpush


@section('content')

    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                {{-- <div class="row">
                    <div class="col-12">
                        <div class="alert alert-primary" role="alert">
                            <div class="alert-body"><strong>Info:</strong> Please check the&nbsp;<a class="text-primary"
                                    href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation/documentation-layout-without-menu.html"
                                    target="_blank">Layout without menu documentation</a>&nbsp; for more details.</div>
                        </div>
                    </div>
                    <!-- Dashboard Ecommerce Starts --> --}}
                
                    <div class="card">
                        <div class="card-header bg-white">
                            <h2 class="h3 text-gray-800">Daftar Menu</h2>
                        </div>
                        <div class="card-body">
                        <div class="text-left">
                        <a href="" class="btn btn-primary btn-icon-split btn-sm my-2 mb-1">
                            <span class="icon text-white-50">
                                <i class="fa fa-shopping-cart"></i>
                            </span>
                            <span class="text">Lihat Keranjang</span>
                        </a>
                        </div>
                        <div class="mt-0" style="margin: auto;">
                        <div class="text-left">
                        <div class="row text-center">
                        <?php foreach ($menus as $list): ?>
                            <div class="col-sm-6 col-lg-2 p-2">
                                <div class="card" data-id="{{ $list['id'] }}">
                                    <img class="card-img-top" src="{{ asset('images/menu/'. $list->image_menu )}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>{{ $list['nama_menu'] }}</strong></h5>
                                        <p class="card-text">Rp {{ number_format($list->harga, 3,".",".") }}</p>
                                        <div class="input-group mb-1">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text unselectable btn-decrease-item" style="cursor: pointer;">-</span>
                                            </div>
                                            <input type="number" class="form-control text-center amount-item" aria-label="Amount" value="1" min="1" max="100">
                                            <div class="input-group-append">
                                                <span class="input-group-text unselectable btn-add-item" style="cursor: pointer;">+</span>
                                            </div>
                                        </div>
                                        <a href="#" class="btn-add-to-cart btn btn-success btn-block">Tambah ke keranjang</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                        </div>
                        </div>
                        </div>
                        </div>
              
                <!-- Dashboard Ecommerce ends -->
                </div>
            </div>
            </div>
            </div>
        </div>

        </section>
        <!-- users edit ends -->

    </div>



@endsection


@push('script')


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->

    <script src="{{ asset('/vendors/js/charts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('/vendors/js/extensions/toastr.min.js') }}"></script>
    <script src="{{ asset('/vendors/js/extensions/moment.min.js') }}"></script>
    <script src="{{ asset('/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('/vendors/js/tables/datatable/responsive.bootstrap.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('/js/core/app-menu.min.js') }}"></script>
    <script src="{{ asset('/js/core/app.min.js') }}"></script>
    <script src="{{ asset('/js/scripts/customizer.min.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('/js/scripts/pages/dashboard-analytics.min.js') }}"></script>
    <script src="{{ asset('/js/scripts/pages/app-invoice-list.min.js') }}"></script>
    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>

    {{-- <script>
        $(window).on('load', function() {
            const chart = new Chartisan({
                el: '#chart',
                url: "@chart('sample_chart')",
            });
            console.log('kebuka');
        })
    </script> --}}
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
        var users = <?php echo json_encode($users); ?>;

        Highcharts.chart('containerr', {
            title: {
                text: 'Total Penjualan Perbulan'
            },
            subtitle: {
                text: 'Source: Transaksi'
            },
            xAxis: {
                categories: ['Sep', 'Oct', 'Nov', 'Dec', 'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu']
            },
            yAxis: {
                title: {
                    text: 'Jumlah Penjualan'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'Transaksi',
                data: users
            }],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 200
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });
    </script>
@endpush
