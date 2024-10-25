{{--<form action="/satker/{{ $satker->id }}/update" method="post" id="frmSatker" name="frmSatker"--}}
<form action="{{ route('ruanganupdate',$ruangan->kode_ruangan) }}" method="post" id="frmRuanganEdit"
      name="frmRuanganEdit"
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
                <input type="text" readonly value="{{ $ruangan->kode_ruangan }}" class="form-control"
                       name="kode_ruangan_edit"
                       id="kode_ruangan_edit"
                       placeholder="Kode Ruangan">
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
                <input type="text" value="{{ $ruangan->name_ruangan }}" class="form-control"
                       name="nama_ruangan_edit" id="nama_ruangan_edit"
                       placeholder="Nama Ruangan">
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-12">
            <select name="jenis_ruangan_edit" id="jenis_ruangan_edit" class="form-select">
                <option value="">- Jenis Kendaraan -</option>
                <option {{ $ruangan->jenis_ruangan=='aula_kantor'?'selected':'' }} value="aula_kantor">Aula</option>
                <option {{ $ruangan->jenis_ruangan=='ruang_rapat'?'selected':'' }} value="ruang_rapat">Ruang Rapat</option>
            </select>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <input type="file" name="foto_ruangan_edit" id="foto_ruangan_edit" class="form-control">
            <input type="hidden" name="old_foto_ruangan_edit" id="old_foto_ruangan_edit"
                   value="{{ $ruangan->foto }}">
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
        $('#frmRuanganEdit').submit(function () {
            var kode_ruangan_edit = $('#frmRuanganEdit').find('#kode_ruangan_edit').val();
            var nama_ruangan_edit = $('#frmRuanganEdit').find('#nama_ruangan_edit').val();
            var jenis_ruangan_edit = $('#frmRuanganEdit').find('#jenis_ruangan_edit').val();

            if (kode_ruangan_edit == "") {
                //alert("NIK Harus Diisi");
                Swal.fire({
                    title: 'Warning!',
                    text: 'Kode Ruangan Harus Diisi',
                    icon: 'warning',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    $('#kode_ruangan_edit').focus();
                });
                return false;
            } else if (nama_ruangan_edit == "") {
                Swal.fire({
                    title: 'Warning!',
                    text: 'Nama Ruangan Harus Diisi',
                    icon: 'warning',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    $('#nama_ruangan_edit').focus();
                });
                return false;
            } else if (jenis_ruangan_edit == "") {
                Swal.fire({
                    title: 'Warning!',
                    text: 'Jenis Ruangan Harus Dipilih',
                    icon: 'warning',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    $('#jenis_ruangan_edit').focus();
                });
                return false;
            }
        });
    });
</script>