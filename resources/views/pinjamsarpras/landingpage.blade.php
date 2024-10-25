<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>SALAMAN</title>
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html"/>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/antri_icon.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/icon/192x192.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="manifest" href="__manifest.json">

    <style>
        .datepicker-modal {
            max-height: 430px !important;
        }

        .datepicker-date-display {
            background-color: #0f3a7e !important;
        }
    </style>

</head>

{{--<body class="bg-white">--}}
<body style="background-image: url('{{ asset('assets/img/antri_bg2.jpg') }}'); background-size: cover; background-repeat: no-repeat;
background-position: 0vh ; height: 700px">

@include('sweetalert::alert')
<!-- loader -->
<div id="loader">
    <div class="spinner-border text-primary" role="status"></div>
</div>
<!-- * loader -->


<!-- App Capsule -->
<div style="height: 70px;">

</div>
<div style="overflow: scroll;" id="appCapsule" class="pt-0">

    <div class="login-form mt-1">
        {{----}}
        @if(Session::get('success'))
            <div class="modal modal-blur fade" id="modal-inputpinjamkendaraan" tabindex="-1" role="dialog"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Peminjaman Kendaraan</h5>
                            <button style="height: 15px; width: 15px;" type="button" class="btn btn-primary btn-close"
                                    data-dismiss="modal" aria-label="Close">X
                            </button>
                        </div>
                        <div class="modal-body" id="loadtambah_form_pinjamkendaraan">

                            <div class="row">
                                <div class="col-12">

                                    <div class="input-icon mb-3">
                                        <input type="text" value="" class="form-control"
                                               name="nama_peminjam"
                                               id="nama_peminjam"
                                               placeholder="Nama Peminjam">

                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
            {{----}}

            <div style="color: black; font-weight: bold" class="alert alert-outline-success">
                {{--{{ Session::get('success') }}--}}
                @php
                    $get_message = explode("|",Session::get('success'))[0];
                    $getkode_booking = explode("|",Session::get('success'))[1];
                @endphp
                {{ $get_message }}
            </div>
            <center>
                <div style="width: 65%;
    height: 45%;
    display: table;
    text-align: center;" class="card gradasikodebooking">
                    <a href="" class="btnLihatKodeBooking" id="lihatKodeBooking" kode_booking="{{ $getkode_booking }}" style="text-decoration: none; color:white">
                        <div class="card-body">
                            <div class="presencecontent">
                                Lihat Kode Booking
                            </div>
                        </div>
                    </a>

                </div>
            </center>

            <div class="modal modal-blur fade" id="modal-tampilkankodebooking" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 style="font-weight: bold;" class="modal-title">Mohon Simpan Kode Booking Ini</h5>
                            <button style="height: 15px; width: 15px;" type="button" class="btn btn-primary btn-close"
                                    data-dismiss="modal" aria-label="Close">X
                            </button>
                        </div>
                        <div class="modal-body" id="loadTampilkanKodeBooking">

                        </div>
                    </div>
                </div>
            </div>


        @endif
        @if(Session::get('warning'))
            <div style="color: red; font-weight: bold" class="alert alert-outline-warning">
                {{ Session::get('warning') }}
            </div>

        @endif
        <div class="section">
            <img src="{{ asset('assets/img/login/antri_icon.png') }}" alt="image"
                 style="height: 130px; width: 150px; border-radius: 20px;"
                 class="form-image">
        </div>
        <div style="height: 50px;"></div>
        <div class="section mt-0">
            <span style="font-size: 75px; font-weight: bold " class="borderedtext">SADIN</span>
            <div style="height: 30px;"></div>
            <span style="font-size: 30px" class="borderedtext_name">Sistem Antrian </span>
            <br>
            {{--<h2>Peminjaman </h2>--}}
            <span style="font-size: 30px" class="borderedtext_name">Kunjungan dan Informasi</span>
            {{--<h4>Pilih Layanan</h4>--}}
        </div>
        <div style="height: 20px;">

        </div>
        <div class="section mt-1 mb-5">
            {{--@php--}}
            {{--$messagewarning = \Illuminate\Support\Facades\Session::get("warning");--}}
            {{--@endphp--}}
            {{--@if(\Illuminate\Support\Facades\Session::get('warning'))--}}
            {{--<div class="alert alert-outline-warning">--}}
            {{--{{  $messagewarning }}--}}
            {{--</div>--}}
            {{--@endif--}}


            {{--pinjam kendaraan--}}
            <div style="width: 100%;
    height: 100%;
    display: table;
    text-align: center;" class="card gradasigreen">
                {{--<a href="{{ route('formpinjamkendaraan') }}" id="btnTambahPinjamKendaraan"--}}
                <a href="{{ route('cetakantrian_kunjungan') }}" id="btnCetakAntrianKunjungan"
                   style="text-decoration: none; color:white" target="_blank">
                    <div class="card-body">
                        <div style="font-weight: bold" class="presencecontent">
{{--                            Pinjam Kendaraan--}}
                            Cetak Antrian Kunjungan
                        </div>
                    </div>
                </a>

            </div>
            <br>

            {{--pinjam ruangan--}}
            <div style="width: 100%;
    height: 100%;
    display: table;
    text-align: center;" class="card gradasired">
                <a  target="_blank" href="{{ route('cetakantrian_informasi') }}" id="btnCetakAntrianInformasi"
                   style="text-decoration: none; color:white">
                    <div class="card-body">
                        <div style="font-weight: bold" class="presencecontent">
{{--                            Pinjam Ruangan--}}
                            Cetak Antrian Informasi
                        </div>
                    </div>
                </a>

            </div>
            <br>
            <div hidden style="width: 100%;
    height: 100%;
    display: table;
    text-align: center;" class="card gradasiblue">
                <a href="{{ route('cekkodebooking') }}" id="btnCekKodeBooking"
                   style="text-decoration: none; color:white">
                    <div class="card-body">
                        <div class="presencecontent">
                            Cek Kode Booking
                        </div>
                    </div>
                </a>

            </div>
            <div style="height: 10px;">

            </div>


            {{--PINJAM KENDARAAN--}}
            <div class="modal modal-blur fade" id="modal-inputpinjamkendaraan" tabindex="-1" role="dialog"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Peminjaman Kendaraan</h5>
                            <button style="height: 15px; width: 15px;" type="button" class="btn btn-primary btn-close"
                                    data-dismiss="modal" aria-label="Close">X
                            </button>
                        </div>
                        <div class="modal-body" id="loadtambah_form_pinjamkendaraan">
                            <form action="{{  route('storepinjamkendaraan') }}" method="post" id="frmPinjaKendaraan"
                                  name="frmPinjaKendaraan"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">

                                        <div class="input-icon mb-3">
                                            <input type="text" value="" class="form-control"
                                                   name="nama_peminjam"
                                                   id="nama_peminjam"
                                                   placeholder="Nama Peminjam">

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" id="tgl_izin" name="tgl_izin"
                                                   class="form-control datepicker" placeholder="Tanggal">
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            {{--PINJAM RUANGAN--}}
            <div class="modal modal-blur fade" id="modal-inputpinjamruangan" tabindex="-1" role="dialog"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Peminjaman Ruangan</h5>
                            <button hidden class="btn btn-secondary cur-p float-left" data-dismiss="modal" name="">
                                Kembali
                            </button>
                            <button style="height: 15px; width: 15px;" type="button" class="btn btn-primary btn-close"
                                    data-dismiss="modal" aria-label="Close">X
                            </button>
                        </div>
                        <div class="modal-body" id="loadtambah_form_pinjamruangan">

                        </div>

                    </div>
                </div>
            </div>


            <div hidden class="form-group boxed">
                <div class="input-wrapper">
                    <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
            </div>

            <div hidden class="form-group boxed">
                <div class="input-wrapper">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
            </div>

            <div class="form-links mt-2">

                {{--<div><a href="page-forgot-password.html" class="text-muted">Forgot Password?</a></div>--}}
            </div>

            {{--<div class="form-button-group">--}}
            {{--<button type="submit" class="btn btn-success btn-block btn-lg">Log in</button>--}}
            {{--<button type="submit" class="btn btn-block btn-lg" style="background-color: #1a202c; color: white">Kirim</button>--}}
            {{--</div>--}}

        </div>
    </div>


</div>
<!-- * App Capsule -->


<!-- ///////////// Js Files ////////////////////  -->
<!-- Jquery -->
<script src="{{ asset('assets/js/lib/jquery-3.4.1.min.js') }}"></script>
<!-- Bootstrap-->
<script src="{{ asset('assets/js/lib/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/bootstrap.min.js') }}"></script>
<!-- Ionicons -->
<script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
<!-- Owl Carousel -->
<script src="{{ asset('assets/js/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
<!-- jQuery Circle Progress -->
<script src="{{ asset('assets/js/plugins/jquery-circle-progress/circle-progress.min.js') }}"></script>
<!-- Base Js File -->
<script src="{{ asset('assets/js/base.js') }}"></script>
{{--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>--}}
<link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    $(document).ready(function () {

        $(".datepicker").datepicker({

            format: "yyyy-mm-dd"
        });
    });
</script>
<script>
    $(function () {
        // $('#lihatKodeBooking').click(function () {
        //     $('#modal-inputpinjamkendaraan').modal('show');
        //     return false;
        // });


        $('.btnLihatKodeBooking').click(function(){
            var kode_booking = $(this).attr('kode_booking');
            //alert(kode_booking);
            $.ajax({
                type: 'POST',
                url: '{{ route('tampilkankodebooking') }}',
                cache: false,
                data: {
                    _token: "{{ csrf_token() }}",
                    kode_booking: kode_booking,
                },
                success: function (respond) {
                    $('#loadTampilkanKodeBooking').html(respond);
                }
            });
            $('#modal-tampilkankodebooking').modal('show');
            return false;
        });


        // $('#btnTambahPinjamRuangan').click(function () {
        //     $('#modal-inputpinjamruangan').modal('show');
        // });

        $("#dari, #sampai").datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'yyyy-mm-dd',
        });
    });
</script>

</body>

</html>