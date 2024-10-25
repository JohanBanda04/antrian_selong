@extends('layouts.admin.tabler')
@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">

                    </div>
                    <h2 class="page-title">
                        Dashboard
                    </h2>
                </div>

            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row">
                <div hidden class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                            <span class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users"
                                   width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                   fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none"
                                                                                                    d="M0 0h24v24H0z"
                                                                                                    fill="none"/><path
                                          d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"/><path
                                          d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"/><path
                                          d="M16 3.13a4 4 0 0 1 0 7.75"/><path d="M21 21v-2a4 4 0 0 0 -3 -3.85"/></svg>
                            </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        132
                                    </div>
                                    <div class="text-secondary">
                                        Karyawan
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                            <span class="bg-success text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                   fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                   stroke-linejoin="round"
                                   class="icon icon-tabler icons-tabler-outline icon-tabler-ambulance"><path
                                          stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                          d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"/><path
                                          d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"/><path
                                          d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5"/><path
                                          d="M6 10h4m-2 -2v4"/></svg>
                            </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        {{--{{ $rekappresensi->jmlhadir }}--}}
                                    </div>
                                    <div class="text-secondary">
                                        @php
                                            $jml_kendaraan = DB::table('kendaraan')->get();
                                        @endphp
                                        Jumlah Kendaraan {{ count($jml_kendaraan) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                            <span class="bg-info text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                   fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                   stroke-linejoin="round"
                                   class="icon icon-tabler icons-tabler-outline icon-tabler-car-suv"><path stroke="none"
                                                                                                           d="M0 0h24v24H0z"
                                                                                                           fill="none"/><path
                                          d="M5 17a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"/><path
                                          d="M16 17a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"/><path
                                          d="M5 9l2 -4h7.438a2 2 0 0 1 1.94 1.515l.622 2.485h3a2 2 0 0 1 2 2v3"/><path
                                          d="M10 9v-4"/><path d="M2 7v4"/><path
                                          d="M22.001 14.001a4.992 4.992 0 0 0 -4.001 -2.001a4.992 4.992 0 0 0 -4 2h-3a4.998 4.998 0 0 0 -8.003 .003"/><path
                                          d="M5 12v-3h13"/></svg>
                            </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        {{--{{ $rekapizin->jmlizin != null? $rekapizin->jmlizin : 0 }}--}}
                                    </div>
                                    <div class="text-secondary">
                                        @php
                                            $jml_pinjamkendaraan = DB::table('pinjam_kendaraan')->get();
                                        @endphp
                                        History Pinjam Kendaraan {{ count($jml_pinjamkendaraan) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                            <span class="bg-warning text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
     class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-clock"><path stroke="none" d="M0 0h24v24H0z"
                                                                                    fill="none"/><path
            d="M10.5 21h-4.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v3"/><path d="M16 3v4"/><path
            d="M8 3v4"/><path d="M4 11h10"/><path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"/><path
            d="M18 16.5v1.5l.5 .5"/></svg>
                            </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        {{--{{ $rekapizin->jmlsakit != null ? $rekapizin->jmlsakit : 0 }}--}}
                                    </div>
                                    <div class="text-secondary">
                                        @php
                                            $jml_ruangan = DB::table('ruangan')->get();
                                        @endphp
                                        Jumlah Ruangan {{ count($jml_ruangan) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                            <span class="bg-danger text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-stats"><path
                                            stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                            d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4"/><path
                                            d="M18 14v4h4"/><path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"/><path
                                            d="M15 3v4"/><path d="M7 3v4"/><path d="M3 11h16"/></svg>
                            </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        {{--{{ $rekappresensi->jmlterlambat }}--}}
                                    </div>
                                    <div class="text-secondary">
                                        @php
                                            $jml_pinjamruangan = DB::table('pinjam_ruangan')->get();
                                        @endphp
                                        Jumlah Pinjaman Ruangan {{ count($jml_pinjamruangan) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection