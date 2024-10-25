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
                        Data Kendaraan
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
                            <div class="row">
                                <div class="col-12">
                                    <a href="#" class="btn btn-primary" id="btnTambahUser"
                                       name="btnTambahUser">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="icon icon-tabler icon-tabler-plus" width="24" height="24"
                                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M12 5l0 14"/>
                                            <path d="M5 12l14 0"/>
                                        </svg>
                                        {{--ASLIII BROYY--}}
                                        Tambah Data User
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <form action="{{ route('datauser') }}" method="get">
                                        <div class="row">
                                            <div class="col-3">
                                                <select name="jenis_user_cari" id="jenis_user_cari"
                                                        class="form-select">
                                                    <option {{ $default_jenisuser == ""?'selected':'' }} value="">
                                                        -Jenis HakAkses User-
                                                    </option>
                                                    <option {{ $default_jenisuser == "superadmin"?'selected':'' }} value="superadmin">
                                                        Admin
                                                    </option>
                                                    <option {{ $default_jenisuser == "rumahtangga"?'selected':'' }} value="rumahtangga">
                                                        Rumah Tangga
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="col-7">
                                                <div class="form-group">
                                                    <input type="text" name="nama_user_cari"
                                                           id="nama_user_cari"
                                                           class="form-control"
                                                           placeholder="Cari Nama User"
                                                           value="{{ Request('nama_user_cari') }}">
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
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Kode User</th>
                                            <th hidden style="width: 100px;">Email</th>
                                            <th>No. HP</th>
                                            <th>Roles</th>
                                            <th>Foto</th>
                                            <th style="width: 100px;">Aksi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($dtUsers as $index=>$dt)
                                            @php
                                                $path = Storage::url('uploads/salamanuser/'.$dt->foto);
                                            @endphp
                                            <tr>
                                                <td>{{ ($loop->iteration + $dtUsers->firstItem()) - 1  }}</td>
                                                <td>{{ strtoupper($dt->name)  }}</td>
                                                <td>{{ strtoupper($dt->username)  }}</td>
                                                <td>{{ $dt->kode_user  }}</td>
                                                <td hidden>{{ $dt->email  }}</td>
                                                <td>{{ $dt->no_hp  }}</td>
                                                <td>{{ $dt->roles  }}</td>
                                                <td>
                                                    @if(empty($dt->foto))
                                                        <img src="{{ url('assets/img/no-photo.png') }}" class="avatar"
                                                             alt="">
                                                    @else
                                                        <img src="{{ url($path) }}" class="avatar" alt="">
                                                    @endif
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
                                                        <a data-toggle="tooltip" title="Edit Data User?" href="#"
                                                           class="edit_user btn btn-info btn-sm"
                                                           style="border-radius: 5px;"
                                                           kode_user="{{ $dt->kode_user }}" id_user="{{ $dt->id }}">
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
                                                        <a hidden data-toggle="tooltip" title="Lihat Detail User" href="#"
                                                           class="tampilkandetail btn btn-warning btn-sm"
                                                           kode_kendaraan="{{--{{ $dt->kode_kendaraan }}--}}"
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
                                                        <form action="{{ route('userdelete',$dt->kode_user) }}"
                                                              method="post"
                                                              style="margin-left: 5px; ">
                                                            @csrf
                                                            {{--cara hack form method--}}
                                                            {{--@method('DELETE')--}}
                                                            <a data-toggle="tooltip" title="Hapus Data User?"
                                                               class="btn btn-danger btn-sm delete-confirm-user"
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
                                        {{ $dtUsers->links() }}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="modal modal-blur fade" id="modal-inputuser" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    {{--ASLIII--}}
                    <h5 class="modal-title">
                        {{--ASLIII--}}
                        Data User
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('userstore') }}" method="post" id="tambahfrmUser"
                          name="tambahfrmUser"
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
                                    <input type="text" readonly value="{{ $kode_user }}"
                                           class="form-control"
                                           name="kode_user" id="kode_user"
                                           placeholder="Kode User">
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
                                           name="nama_user" id="nama_user"
                                           placeholder="Nama User">
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
                                    <input maxlength="10" type="number" value="" class="form-control"
                                           name="no_hp"
                                           id="no_hp"
                                           placeholder="No Handphone">
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
                                    <input maxlength="10" type="password" value="" class="form-control"
                                           name="password_user"
                                           id="password_user"
                                           placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <center><label class="form-label">Foto User</label></center>
                                <input type="file" name="foto_user" id="foto_user" class="form-control">
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-12">
                                <select name="jenis_hakakses" id="jenis_hakakses" class="form-select">
                                    <option value="">- Jenis HakAkses User -</option>
                                    <option value="superadmin">Admin</option>
                                    <option value="rumahtangga">Rumah Tangga</option>
                                </select>
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
    <div class="modal modal-blur fade" id="modal-edituser" name="modal-edituser" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data User</h5>
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
                    <h5 class="modal-title">Detail Data Kendaraan</h5>
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
            $('#nama_user').mask("AAAAAAAAAAAA");
            $('#btnTambahUser').click(function () {
                $('#modal-inputuser').modal('show');
            });

            $('.edit_user').click(function () {
                var kode_user = $(this).attr('kode_user');
                var id_user = $(this).attr('id_user');
                //alert(id_user);
                //return false;
                $.ajax({
                    type: 'POST',
                    url: '{{ route('useredit') }}',
                    cache: false,
                    data: {
                        _token: "{{ csrf_token() }}",
                        kode_user: kode_user,
                        id_user: id_user,

                    },
                    success: function (respond) {
                        $('#loadeditform').html(respond)
                    }
                });
                $('#modal-edituser').modal('show');
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

            $('.delete-confirm-user').click(function (e) {
                //alert('tes');
                //return false;
                var form = $(this).closest('form');
                e.preventDefault();
                Swal.fire({
                    title: "Yakin Menghapus Data User?",
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
                            text: "Data User Berhasil Dihapus",
                            icon: "success"
                        });
                    }
                });
            });

            $('#tambahfrmUser').submit(function () {
                var kode_user = $('#tambahfrmUser').find('#kode_user').val();
                var nama_user = $('#tambahfrmUser').find('#nama_user').val();
                var no_hp = $('#tambahfrmUser').find('#no_hp').val();
                var password_user = $('#tambahfrmUser').find('#password_user').val();
                var foto_user = $('#tambahfrmUser').find('#foto_user').val();
                var jenis_hakakses = $('#tambahfrmUser').find('#jenis_hakakses').val();

                if (kode_user == "") {
                    //alert("NIK Harus Diisi");
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Kode User Harus Diisi',
                        icon: 'warning',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        $('#kode_user').focus();
                    });
                    return false;
                } else if (nama_user == "") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Nama User Harus Diisi',
                        icon: 'warning',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        $('#nama_user').focus();
                    });
                    return false;
                } else if (no_hp == "") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Nomor Handphone Harus Diisi',
                        icon: 'warning',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        $('#no_hp').focus();
                    });
                    return false;
                } else if (password_user == "") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Password User Harus Diisi',
                        icon: 'warning',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        $('#password_user').focus();
                    });
                    return false;
                } else if (foto_user == "") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Foto User Harus Diupload',
                        icon: 'warning',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        $('#foto_user').focus();
                    });
                    return false;
                } else if (jenis_hakakses == "") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Jenis Hak Akses Harus Dipilih',
                        icon: 'warning',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        $('#jenis_hakakses').focus();
                    });
                    return false;
                }
            });

            $('.tampilkandetail').click(function () {
                var kode_kendaraan = $(this).attr('kode_kendaraan');
                //alert(kode_kendaraan);
                //return false;
                $.ajax({
                    type: 'POST',
                    url: '{{ route('tampilkandetailkendaraan') }}',
                    cache: false,
                    data: {
                        _token: '{{ csrf_token() }}',
                        kode_kendaraan: kode_kendaraan,
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