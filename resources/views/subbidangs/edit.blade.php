{{--<form action="/satker/{{ $satker->id }}/update" method="post" id="frmSatker" name="frmSatker"--}}
<form action="{{ route('subbidangupdate',$subbidang->kode_subbid) }}" method="post" id="frmSubbidangEdit"
      name="frmSubbidangEdit"
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
                <input type="hidden" readonly value="{{ $subbidang->id }}"
                       class="form-control"
                       name="id_subbid_edit" id="id_subbid_edit"
                       placeholder="ID Subbid">
                <input type="text" readonly value="{{ $kode_subbidang }}"
                       class="form-control"
                       name="kode_subbid_edit" id="kode_subbid_edit"
                       placeholder="Kode Subbid">
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
                <input type="text" value="{{ $subbidang->name_subbid }}" class="form-control"
                       name="nama_subbid_edit" id="nama_subbid_edit"
                       placeholder="Nama Subbid">
            </div>
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
        $('#frmSubbidangEdit').submit(function () {
            var kode_subbid_edit = $('#frmSubbidangEdit').find('#kode_subbid_edit').val();
            var nama_subbid_edit = $('#frmSubbidangEdit').find('#nama_subbid_edit').val();
            //alert(kode_subbid_edit);
            //return false;
            if (kode_subbid_edit == "") {
                //alert("NIK Harus Diisi");
                Swal.fire({
                    title: 'Warning!',
                    text: 'Kode Subbidang Harus Diisi',
                    icon: 'warning',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    $('#kode_subbid_edit').focus();
                });
                return false;
            } else if (nama_subbid_edit == "") {
                Swal.fire({
                    title: 'Warning!',
                    text: 'Nama Subbidang Harus Diisi',
                    icon: 'warning',
                    confirmButtonText: 'Ok'
                }).then((result) => {
                    $('#nama_subbid_edit').focus();
                });
                return false;
            }
        });
    });
</script>