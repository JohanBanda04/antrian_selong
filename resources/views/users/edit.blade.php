{{--<form action="/satker/{{ $satker->id }}/update" method="post" id="frmSatker" name="frmSatker"--}}
<form action="{{ route('userupdate',$user->kode_user) }}" method="post" id="frmUserEdit"
      name="frmUserEdit"
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
                <input type="text" readonly value="{{ $user->kode_user }}" class="form-control"
                       name="kode_user_edit"
                       id="kode_user_edit"
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
                <input type="text" value="{{ $user->username }}" class="form-control"
                       name="nama_user_edit" id="nama_user_edit"
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
                <input maxlength="10" type="number" value="{{ $user->no_hp }}" class="form-control"
                       name="no_hp_edit"
                       id="no_hp_edit"
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
                <input maxlength="12" type="password" value="" class="form-control"
                       name="password_user_edit"
                       id="password_user_edit"
                       placeholder="Password">
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-12">
            <center><label class="form-label">Foto User</label></center>
            <input type="file" name="foto_user_edit" id="foto_user_edit" class="form-control">
            <input type="hidden" name="old_foto_user_edit" id="old_foto_user_edit"
                   value="{{ $user->foto }}">
        </div>
    </div>
    <div class="row ">
        <div class="col-12">
            <select name="jenis_hakakses_edit" id="jenis_hakakses_edit" class="form-select">
                <option value="">- Jenis HakAkses User -</option>
                <option {{  $user->roles=='superadmin'?'selected':''}} value="superadmin">Admin</option>
                <option {{  $user->roles=='rumahtangga'?'selected':''}} value="rumahtangga">Rumah Tangga</option>
            </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <div class="form-group">
                <button class="btn btn-primary w-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="icon icon-tabler icons-tabler-outline icon-tabler-refresh">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4"/>
                        <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4"/>
                    </svg>
                    Update Data
                </button>
            </div>
        </div>
    </div>
</form>
<script>
    $(function () {
        $('#nama_user_edit').mask("AAAAAAAAAAAA");
        //$('#modal-edituser').on('hidden.bs.modal', function (e) {
            //$('#password_user_edit').val('')
            //$('#button1').prop('disabled', true);
        //});
        $('#frmKendaraanEdit').submit(function () {
            var kode_kendaraan_edit = $('#frmKendaraanEdit').find('#kode_kendaraan_edit').val();
            var nama_kendaraan_edit = $('#frmKendaraanEdit').find('#nama_kendaraan_edit').val();
            var plat_kendaraan_edit = $('#frmKendaraanEdit').find('#nama_kendaraan_edit').val();
            var jenis_kendaraan_edit = $('#frmKendaraanEdit').find('#nama_kendaraan_edit').val();
            //var foto_kendaraan_edit = $('#frmKendaraanEdit').find('#nama_kendaraan_edit').val();
            //var nama_kendaraan_edit = $('#frmKendaraanEdit').find('#nama_kendaraan_edit').val();
            if (kode_kendaraan_edit == "") {
                //alert("NIK Harus Diisi");
                Swal.fire({
                    title: 'Warning!',
                    text: 'Kode Kendaraan Harus Diisi',
                    icon: 'warning',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    $('#kode_kendaraan_edit').focus();
                });
                return false;
            } else if (nama_kendaraan_edit == "") {
                Swal.fire({
                    title: 'Warning!',
                    text: 'Nama Kendaraan Harus Diisi',
                    icon: 'warning',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    $('#nama_kendaraan_edit').focus();
                });
                return false;
            } else if (plat_kendaraan_edit == "") {
                Swal.fire({
                    title: 'Warning!',
                    text: 'Plat Kendaraan Harus Diisi',
                    icon: 'warning',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    $('#plat_kendaraan_edit').focus();
                });
                return false;
            } else if (jenis_kendaraan_edit == "") {
                Swal.fire({
                    title: 'Warning!',
                    text: 'Jenis Kendaraan Harus Dipilih',
                    icon: 'warning',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    $('#jenis_kendaraan_edit').focus();
                });
                return false;
            }
        });
    });
</script>