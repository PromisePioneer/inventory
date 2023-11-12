@extends('layouts.app')

@section('content')
    <div class="col-xl-4">
        <a href="{{ url('master/distributor') }}" class="card bg-info hoverable card-xl-stretch mb-xl-8">
            <div class="card-body">
                 <span class="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">
                   <h1 class="text-white">{{ $distributor }}</h1>
                </span>
                <div class="float-end">
                <i class="bi bi-card-checklist fs-5x text-white"></i>
                </div>
                <div class="text-gray-900 fw-bolder fs-2 mb-2 mt-5"><span class="text-white">Distributor</span></div>
                <div class="fw-bold text-gray-400 text-white"><span class="text-white">Lihat Selengkapnya</span></div>
            </div>
        </a>
    </div>
    <div class="col-xl-4">
        <!--begin::Statistics Widget 5-->
        <a href="{{ url('transaksi/barang-masuk') }}" class="card bg-success hoverable card-xl-stretch mb-xl-8">
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Svg Icon | path: icons/duotune/general/gen008.svg-->
                <span class="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">
                   <h1 class="text-white">{{ $barang_masuk }}</h1>
                </span>
                <div class="float-end">
                    <i class="bi bi-cart-plus-fill fs-5x text-white"></i>
                </div>
                <!--end::Svg Icon-->
                <div class="text-white fw-bolder fs-2 mb-2 mt-5">Barang Masuk</div>
                <div class="fw-bold text-white">Lihat Selengkapnya</div>
            </div>
            <!--end::Body-->
        </a>
        <!--end::Statistics Widget 5-->
    </div>
    <div class="col-xl-4">
        <!--begin::Statistics Widget 5-->
        <a href="{{ url('transaksi/barang-keluar') }}" class="card bg-warning hoverable card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr070.svg-->
                <span class="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">
                   <h1 class="text-white">{{ $barang_keluar }}</h1>
                </span>
                <div class="float-end">
                    <i class="bi bi-cart-dash-fill fs-5x text-white"></i>
                </div>
                <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5">Barang Keluar</div>
                <div class="fw-bold text-gray-100">Lihat Selengkapnya</div>
            </div>
        </a>
    </div>
{{--    <div class="col-xl-12">--}}
{{--        <div class="card card-xl-stretch mb-5 mb-xl-8">--}}
{{--            <div class="card-header border-0 pt-5">--}}
{{--                <h3 class="card-title align-items-start flex-column">--}}
{{--                    <span class="card-label fw-bolder fs-3 mb-1">Statistik</span>--}}
{{--                    <span class="text-muted fw-bold fs-7">Statistik Total Barang Masuk dan Barang Keluar</span>--}}
{{--                </h3>--}}
{{--            </div>--}}
{{--            <div class="card-body">--}}
{{--                <div id="charts"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.28.0/dist/apexcharts.min.js"></script>
{{--    <script>--}}
{{--        let barangMasukTotal = {{ $total_barang_masuk }};--}}
{{--        let barangKeluarTotal = {{ $total_barang_keluar }};--}}

{{--        function formatToIDR(val) {--}}
{{--            const formatter = new Intl.NumberFormat('id-ID', {--}}
{{--                style: 'currency',--}}
{{--                currency: 'IDR',--}}
{{--                minimumFractionDigits: 2,--}}
{{--            });--}}

{{--            return formatter.format(val);--}}
{{--        }--}}

{{--        const formattedBarangMasukTotal = formatToIDR(barangMasukTotal);--}}
{{--        const formattedBarangKeluarTotal = formatToIDR(barangKeluarTotal);--}}

{{--        var options = {--}}
{{--            series: [--}}
{{--                {--}}
{{--                    name: 'Total Barang Masuk',--}}
{{--                    data: [barangMasukTotal]--}}
{{--                },--}}
{{--                {--}}
{{--                    name: 'Total Barang Keluar',--}}
{{--                    data: [barangKeluarTotal]--}}
{{--                }--}}
{{--            ],--}}
{{--            chart: {--}}
{{--                type: 'bar',--}}
{{--                height: 400,--}}
{{--                width: '100%',--}}
{{--                toolbar: {--}}
{{--                    show: true,--}}
{{--                },--}}
{{--            },--}}
{{--            dataLabels: {--}}
{{--                enabled: false,--}}
{{--            },--}}
{{--            xaxis: {--}}
{{--                categories: [`Total Barang Masuk (${formattedBarangMasukTotal})`, `Total Barang Keluar (${formattedBarangKeluarTotal})`],--}}
{{--            },--}}
{{--            colors: ['#DA0C81', '#186F65'],--}}
{{--        };--}}

{{--        var chart = new ApexCharts(document.querySelector("#charts"), options);--}}
{{--        chart.render();--}}

{{--    </script>--}}
@endpush
