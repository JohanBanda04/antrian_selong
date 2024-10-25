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
                        Data Pinjam Ruangan
                    </h2>
                </div>

            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    @if(Session::get('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                        </div>

                                    @endif
                                    @if(Session::get('warning'))
                                        <div class="alert alert-warning">
                                            {{ Session::get('warning') }}
                                        </div>

                                    @endif
                                </div>
                            </div>
                            <div hidden class="row">
                                <div class="col-12">
                                    <a href="#" class="btn btn-primary" id="btnTambahKendaraan"
                                       name="btnTambahKendaraan">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="icon icon-tabler icon-tabler-plus" width="24" height="24"
                                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M12 5l0 14"/>
                                            <path d="M5 12l14 0"/>
                                        </svg>
                                        {{--ASLIII BROYY--}}
                                        Tambah Data Kendaraan
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <form action="{{ route('pinjamruangan') }}" method="get">
                                        <div class="row">
                                            {{--<div class="col-3">--}}
                                            {{--<select name="jenis_kendaraan_cari" id="jenis_kendaraan_cari"--}}
                                            {{--class="form-select">--}}
                                            {{--<option --}}{{--{{ $default_jeniskendaraan == ""?'selected':'' }}--}}{{-- value="">--}}
                                            {{---Jenis Kendaraan---}}
                                            {{--</option>--}}
                                            {{--<option --}}{{--{{ $default_jeniskendaraan == "mobil"?'selected':'' }}--}}{{-- value="mobil">--}}
                                            {{--Mobil--}}
                                            {{--</option>--}}
                                            {{--<option --}}{{--{{ $default_jeniskendaraan == "motor"?'selected':'' }}--}}{{-- value="motor">--}}
                                            {{--Motor--}}
                                            {{--</option>--}}
                                            {{--</select>--}}
                                            {{--</div>--}}
                                            <div class="col-10">
                                                <div class="form-group">
                                                    <input type="text" name="kode_booking_cariruangan"
                                                           id="kode_booking_cariruangan"
                                                           class="form-control"
                                                           placeholder="Cari Kode Booking"
                                                           value="{{ Request('kode_booking_cariruangan') }}">
                                                </div>
                                            </div>


                                            <div class="col-2">
                                                <button type="submit" class="btn btn-primary" style="width: 140px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         class="icon icon-tabler icon-tabler-search" width="24"
                                                         height="24" viewBox="0 0 24 24" stroke-width="2"
                                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                                         stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"/>
                                                        <path d="M21 21l-6 -6"/>
                                                    </svg>
                                                    Cari
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Perihal</th>
                                            <th>Kode Booking</th>
                                            <th>Tgl Awal</th>
                                            <th>Tgl Akhir</th>
                                            {{--<th>Subbid Peminjam</th>--}}
                                            {{--<th>PIC</th>--}}
                                            <th>Kode Ruangan</th>
                                            <th style="text-align: center">Status</th>
                                            <th style="width: 100px;">Aksi</th>
                                            {{--<th style="width: 100px;">Jenis Kendaraan</th>--}}
                                            {{--<th>Foto</th>--}}
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($dtpinjamRuangans as $index=>$dt)
                                        <tr>
                                            <td>{{ ($loop->iteration + $dtpinjamRuangans->firstItem()) -1 }}</td>
                                            <td>{{ $dt->perihal_pinjaman }}</td>
                                            <td>{{ $dt->kode_booking }}</td>
                                            @php
                                                $explode_tgl_awal = explode("-", $dt->mulai_tgl);
                                                $explode_tgl_sampai = explode("-", $dt->sampai_tgl);

                                                $tgl_awal = $explode_tgl_awal[2]."-".$explode_tgl_awal[1]."-".$explode_tgl_awal[0];
                                                $tgl_sampai = $explode_tgl_sampai[2]."-".$explode_tgl_sampai[1]."-".$explode_tgl_sampai[0];

                                            @endphp
                                            <td>{{ $tgl_awal }}</td>
                                            <td>{{ $tgl_sampai }}</td>
                                            <td>{{ $dt->kode_ruangan }}</td>
                                            <td style="text-align: center;">
                                                <?php
                                                if($dt->status=="Pengajuan Pinjaman"){
                                                    $class = "#800080";
                                                } else if($dt->status == "Ditolak"){
                                                    $class = "#A6211E";
                                                } else {
                                                    $class = "#1C953A";
                                                }
                                                ?>
                                                    <label for="label"
                                                           class="label" style="background-color: {{ $class }}; border-radius: 5px; text-align: center">
                                                        {{ ucfirst($dt->status) }}
                                                    </label>
                                            </td>
                                            <td style="max-width: -moz-fit-content; max-width: fit-content;
                                           margin: 0 auto; overflow-x: auto; white-space: nowrap; width: 100px;">
                                                <div class="btn-group">

                                                    <a hidden data-toggle="tooltip" title="Generate QR Code"
                                                       href="{{--{{ route('mediaqrcode',$d->kode_media) }}--}}"
                                                       class="qrcode_media btn btn-info btn-sm"
                                                       style="border-radius: 5px; background-color: #786f18; margin-right: 10px;"
                                                       {{--kode_media="{{ $d->kode_media }--}}}" method="get">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                         height="24" viewBox="0 0 24 24" fill="none"
                                                         stroke="currentColor" stroke-width="2"
                                                         stroke-linecap="round" stroke-linejoin="round"
                                                         class="icon icon-tabler icons-tabler-outline icon-tabler-qrcode">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                        <path d="M4 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"/>
                                                        <path d="M7 17l0 .01"/>
                                                        <path d="M14 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"/>
                                                        <path d="M7 7l0 .01"/>
                                                        <path d="M4 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z"/>
                                                        <path d="M17 7l0 .01"/>
                                                        <path d="M14 14l3 0"/>
                                                        <path d="M20 14l0 .01"/>
                                                        <path d="M14 14l0 3"/>
                                                        <path d="M14 20l3 0"/>
                                                        <path d="M17 17l3 0"/>
                                                        <path d="M20 17l0 3"/>
                                                    </svg>
                                                    </a>
                                                    <a data-toggle="tooltip" title="Beri Persetujuan Ruangan?" href="#"
                                                       class="edit_pinjamruangan btn  btn-sm"
                                                       style="border-radius: 5px; background-color: #19762e"
                                                       kode_booking_ruangan="{{ $dt->kode_booking }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             class="icon icon-tabler icon-tabler-edit" width="24"
                                                             height="24" viewBox="0 0 24 24" stroke-width="2"
                                                             stroke="currentColor" fill="none"
                                                             stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"/>
                                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"/>
                                                            <path d="M16 5l3 3"/>
                                                        </svg>
                                                    </a>
                                                    <a data-toggle="tooltip" title="Detail Pinjam Ruangan" href="#"
                                                       class="tampilkandetail btn btn-warning btn-sm"
                                                       kode_booking="{{ $dt->kode_booking }}" id_booking="{{ $dt->id }}"
                                                       style="margin-right: 5px; border-radius: 5px; margin-left:8px ; background-color: orange">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             class="icon icon-tabler icon-tabler-file-description"
                                                             width="24" height="24" viewBox="0 0 24 24"
                                                             stroke-width="1.5" stroke="currentColor" fill="none"
                                                             stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                            <path d="M14 3v4a1 1 0 0 0 1 1h4"/>
                                                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"/>
                                                            <path d="M9 17h6"/>
                                                            <path d="M9 13h6"/>
                                                        </svg>
                                                    </a>
                                                    <form action="{{ route('pinjamruangandelete',$dt->kode_booking) }}"
                                                          method="post"
                                                          style="margin-left: 5px; ">
                                                        @csrf
                                                        {{--cara hack form method--}}
                                                        {{--@method('DELETE')--}}
                                                        <a data-toggle="tooltip" title="Hapus Data Pinjam Ruangan?"
                                                           class="btn btn-danger btn-sm delete-confirm-pinjamkendaraan"
                                                           style="border-radius: 5px; height: 23px;">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 class="icon icon-tabler icon-tabler-trash-filled"
                                                                 width="24" height="24" viewBox="0 0 24 24"
                                                                 stroke-width="2" stroke="currentColor" fill="none"
                                                                 stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                                <path d="M20 6a1 1 0 0 1 .117 1.993l-.117 .007h-.081l-.919 11a3 3 0 0 1 -2.824 2.995l-.176 .005h-8c-1.598 0 -2.904 -1.249 -2.992 -2.75l-.005 -.167l-.923 -11.083h-.08a1 1 0 0 1 -.117 -1.993l.117 -.007h16z"
                                                                      stroke-width="0" fill="currentColor"/>
                                                                <path d="M14 2a2 2 0 0 1 2 2a1 1 0 0 1 -1.993 .117l-.007 -.117h-4l-.007 .117a1 1 0 0 1 -1.993 -.117a2 2 0 0 1 1.85 -1.995l.15 -.005h4z"
                                                                      stroke-width="0" fill="currentColor"/>
                                                            </svg>
                                                        </a>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-end">
                                        {{ $dtpinjamRuangans->links() }}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="modal modal-blur fade" id="modal-inputkendaraan" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    {{--ASLIII--}}
                    <h5 class="modal-title">
                        {{--ASLIII--}}
                        Data Kendaraan
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('kendaraanstore') }}" method="post" id="tambahfrmKendaraan"
                          name="tambahfrmKendaraan"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code"
                                         width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                                d="M7 8l-4 4l4 4"/><path d="M17 8l4 4l-4 4"/><path
                                                d="M14 4l-4 16"/></svg>
                                </span>
                                    <input type="text" readonly value="{{--{{ $kode_kendaraan }}--}}"
                                           class="form-control"
                                           name="kode_kendaraan" id="kode_kendaraan"
                                           placeholder="Kode Kendaraan">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="icon icon-tabler icon-tabler-file-barcode" width="24" height="24"
                                         viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                         stroke-linecap="round" stroke-linejoin="round"><path stroke="none"
                                                                                              d="M0 0h24v24H0z"
                                                                                              fill="none"/><path
                                                d="M14 3v4a1 1 0 0 0 1 1h4"/><path
                                                d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"/><path
                                                d="M8 13h1v3h-1z"/><path d="M12 13v3"/><path d="M15 13h1v3h-1z"/>
                                    </svg>
                                </span>
                                    <input type="text" value="" class="form-control"
                                           name="nama_kendaraan" id="nama_kendaraan"
                                           placeholder="Nama Kendaraan">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user"
                                         width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                                d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"/><path
                                                d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"/>
                                    </svg>
                                </span>
                                    <input maxlength="10" type="text" value="" class="form-control"
                                           name="plat_kendaraan"
                                           id="plat_kendaraan"
                                           placeholder="Plat Kendaraan">
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-12">
                                <select name="jenis_kendaraan" id="jenis_kendaraan" class="form-select">
                                    <option value="">- Jenis Kendaraan -</option>
                                    <option value="mobil">Mobil</option>
                                    <option value="motor">Motor</option>
                                </select>
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-12">
                                <center><label class="form-label">Foto Kendaraan</label></center>
                                <input type="file" name="foto_kendaraan" id="foto_kendaraan" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-12">
                                <div class="form-group">
                                    <button class="btn btn-primary w-100">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="icon icon-tabler icon-tabler-send" width="24" height="24"
                                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M10 14l11 -11"/>
                                            <path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5"/>
                                        </svg>
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



    {{--modal untuk edit--}}
    {{--Modal Edit--}}
    <div class="modal modal-blur fade" id="modal-editpinjamruangan" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Persetujuan Pinjaman Ruangan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="loadeditform">

                </div>

            </div>
        </div>
    </div>

    {{--modal tampilkan detail--}}
    <div class="modal modal-blur fade" id="modal-tampilkandetail" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    {{--ASLIII--}}
                    <h5 class="modal-title">Detail Data Pinjam Ruangan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="loadedittampilkandetail">

                </div>
            </div>
        </div>
    </div>
@endsection

@push('myscript')
    <script>
        $(function () {
            //$('#plat_kendaraan').mask("AA 0000 AAA");
            $('#btnTambahKendaraan').click(function () {
                $('#modal-inputkendaraan').modal('show');
            });

            $('.edit_pinjamruangan').click(function () {
                var kode_booking_ruangan = $(this).attr('kode_booking_ruangan');
                //alert(kode_booking_ruangan);
                //return false;
                //alert(kode_kendaraan);
                $.ajax({
                    type: 'POST',
                    url: '{{ route('pinjamruanganedit') }}',
                    cache: false,
                    data: {
                        _token: "{{ csrf_token() }}",
                        kode_booking_ruangan: kode_booking_ruangan,

                    },
                    success: function (respond) {
                        $('#loadeditform').html(respond)
                    }
                });
                $('#modal-editpinjamruangan').modal('show');
            });

            $('.edit').click(function () {
                //alert('editts');
                var id_satker = $(this).attr('id_satker');
                //alert(id_satker);
                $.ajax({
                    type: 'POST',
                    url: '{{--{{ route('satkeredit') }}--}}',
                    cache: false,
                    data: {
                        _token: "{{ csrf_token() }}",
                        id_satker: id_satker,

                    },
                    success: function (respond) {
                        console.log(respond);
                        $('#loadeditform').html(respond);
                    }
                });
                $('#modal-editsatker').modal('show');
            });

            $('.delete-confirm-pinjamkendaraan').click(function (e) {
                var form = $(this).closest('form');
                //alert("tes hapus");
                //return false;
                e.preventDefault();
                Swal.fire({
                    title: "Yakin Menghapus Data Pinjaman Kendaraan?",
                    text: "Jika Ya Maka Data Akan Terhapus Permanent",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, Hapus Saja!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                        Swal.fire({
                            title: "Deleted!",
                            text: "Data Pinjaman Kendaraan Berhasil Dihapus",
                            icon: "success"
                        });
                    }
                });
            });

            $('#tambahfrmKendaraan').submit(function () {

                var kode_kendaraan = $('#tambahfrmKendaraan').find('#kode_kendaraan').val();
                var nama_kendaraan = $('#tambahfrmKendaraan').find('#nama_kendaraan').val();
                var plat_kendaraan = $('#tambahfrmKendaraan').find('#plat_kendaraan').val();
                var jenis_kendaraan = $('#tambahfrmKendaraan').find('#jenis_kendaraan').val();
                var foto_kendaraan = $('#tambahfrmKendaraan').find('#foto_kendaraan').val();

                if (kode_kendaraan == "") {
                    //alert("NIK Harus Diisi");
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Kode Kendaraan Harus Diisi',
                        icon: 'warning',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        $('#kode_kendaraan').focus();
                    });
                    return false;
                } else if (nama_kendaraan == "") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Nama Kendaraan Harus Diisi',
                        icon: 'warning',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        $('#nama_kendaraan').focus();
                    });
                    return false;
                } else if (plat_kendaraan == "") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Plat Kendaraan Harus Diisi',
                        icon: 'warning',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        $('#plat_kendaraan').focus();
                    });
                    return false;
                } else if (jenis_kendaraan == "") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Jenis Kendaraan Harus Dipilih',
                        icon: 'warning',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        $('#jenis_kendaraan').focus();
                    });
                    return false;
                } else if (foto_kendaraan == "") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Foto Kendaraan Harus Diisi',
                        icon: 'warning',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        $('#foto_kendaraan').focus();
                    });
                    return false;
                }
            });

            $('.tampilkandetail').click(function () {
                var kode_booking = $(this).attr('kode_booking');
                var id_booking = $(this).attr('id_booking');
                //alert(id_booking);
                //return false;
                $.ajax({
                    type: 'POST',
                    url: '{{ route('tampilkandetailpinjamruangan') }}',
                    cache: false,
                    data: {
                        _token: '{{ csrf_token() }}',
                        kode_booking: kode_booking,
                        id_booking: id_booking,
                    },
                    success: function (respond) {
                        $('#loadedittampilkandetail').html(respond);
                    },
                });
                $('#modal-tampilkandetail').modal('show');
            });
        });
    </script>
@endpush