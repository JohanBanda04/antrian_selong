{{--<form action="/satker/{{ $satker->id }}/update" method="post" id="frmSatker" name="frmSatker"--}}
<form action="{{ route('pinjamruanganupdate',$pinjamruangan->kode_booking) }}" method="post"
      id="frmPinjamRuanganEdit"
      name="frmPinjamRuanganEdit"
      enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-12">
            <div>Kode Booking</div>
            <div class="input-icon mb-3 mt-2">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code"
                                         width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                                d="M7 8l-4 4l4 4"/><path d="M17 8l4 4l-4 4"/><path
                                                d="M14 4l-4 16"/></svg>
                                </span>
                <input type="text" readonly value="{{ $pinjamruangan->kode_booking }}" class="form-control"
                       name="kode_booking_pinjam"
                       id="kode_booking_pinjam"
                       placeholder="Kode Booking">
                <input type="hidden" readonly value="{{ $pinjamruangan->id }}" class="form-control"
                       name="id_kodebooking_pinjam"
                       id="id_kodebooking_pinjam"
                       placeholder="ID Kode Booking">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div>Perihal Pinjaman</div>
            <div class="input-icon mb-3 mt-2">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code"
                                         width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                                d="M7 8l-4 4l4 4"/><path d="M17 8l4 4l-4 4"/><path
                                                d="M14 4l-4 16"/></svg>
                                </span>
                <input type="text" readonly value="{{ $pinjamruangan->perihal_pinjaman }}" class="form-control"
                       name="perihal_pinjam_ruangan"
                       id="perihal_pinjam_ruangan"
                       placeholder="Perihal Pinjaman">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div>Tgl Mulai Pinjaman</div>
            <div class="input-icon mb-3 mt-2">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code"
                                         width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                                d="M7 8l-4 4l4 4"/><path d="M17 8l4 4l-4 4"/><path
                                                d="M14 4l-4 16"/></svg>
                                </span>
                @php
                    $namabulan = ["", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
                "Oktober", "November", "Desember",
            ];

                    $dari = $pinjamruangan->mulai_tgl;
                    $explode_dari = explode('-', $dari);
                    $tgl_dari = $explode_dari[2];
                    $bulan_dari = $explode_dari[1];
                    if (substr($bulan_dari, 0, 1) == 0) {
                        $bulan_dari = substr($bulan_dari, 1, 1);
                    } else if (substr($bulan_dari, 0, 1) == 1) {
                        $bulan_dari = substr($bulan_dari, 0, 2);
                    }

                        $tahun_dari = $explode_dari[0];

                $complete_tgl_mulai = $tgl_dari."-".$namabulan[$bulan_dari]."-".$tahun_dari;

                @endphp
                <input type="hidden" readonly value="{{ $pinjamruangan->mulai_tgl }}" class="form-control"
                       name="mulai_tglpinjam_sql"
                       id="mulai_tglpinjam_sql"
                       placeholder="Mulai Tanggal">
                <input type="text" readonly value="{{ $complete_tgl_mulai }}" class="form-control"
                       name="mulai_tgl_pinjam"
                       id="mulai_tgl_pinjam"
                       placeholder="Mulai Tanggal">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div>Tgl Akhir Pinjaman</div>
            <div class="input-icon mb-3 mt-2">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code"
                                         width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                                d="M7 8l-4 4l4 4"/><path d="M17 8l4 4l-4 4"/><path
                                                d="M14 4l-4 16"/></svg>
                                </span>
                @php
                    $namabulan = ["", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
                "Oktober", "November", "Desember",
            ];

                    $dari = $pinjamruangan->sampai_tgl;
                    $explode_dari = explode('-', $dari);
                    $tgl_dari = $explode_dari[2];
                    $bulan_dari = $explode_dari[1];
                    if (substr($bulan_dari, 0, 1) == 0) {
                        $bulan_dari = substr($bulan_dari, 1, 1);
                    } else if (substr($bulan_dari, 0, 1) == 1) {
                        $bulan_dari = substr($bulan_dari, 0, 2);
                    }

                        $tahun_dari = $explode_dari[0];

                $complete_tgl_sampai = $tgl_dari."-".$namabulan[$bulan_dari]."-".$tahun_dari;

                @endphp
                <input type="hidden" readonly value="{{ $pinjamruangan->sampai_tgl }}" class="form-control"
                       name="sampai_tglpinjam_sql"
                       id="sampai_tglpinjam_sql"
                       placeholder="Sampai Tanggal">
                <input type="text" readonly value="{{ $complete_tgl_sampai }}" class="form-control"
                       name="sampai_tgl_pinjam"
                       id="sampai_tgl_pinjam"
                       placeholder="Sampai Tanggal">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div>Kode Ruangan</div>
            <div class="input-icon mb-3 mt-2">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code"
                                         width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                                d="M7 8l-4 4l4 4"/><path d="M17 8l4 4l-4 4"/><path
                                                d="M14 4l-4 16"/></svg>
                                </span>
                <input type="text" readonly value="{{ $pinjamruangan->kode_ruangan }}" class="form-control"
                       name="kode_ruangan_dipinjam"
                       id="kode_ruangan_dipinjam"
                       placeholder="Kode Ruangan Dipinjam">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div>Nama Ruangan (Jenis Ruangan)</div>
            <div class="input-icon mb-3 mt-2">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code"
                                         width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                                d="M7 8l-4 4l4 4"/><path d="M17 8l4 4l-4 4"/><path
                                                d="M14 4l-4 16"/></svg>
                                </span>
                @php
                    $get_jenisruangan = DB::table('ruangan')->where('kode_ruangan', $pinjamruangan->kode_ruangan)->first();
                $explode_jenis_ruangan = explode('_',$get_jenisruangan->jenis_ruangan);
                $j_ruangan = ucfirst($explode_jenis_ruangan[0])." ".ucfirst($explode_jenis_ruangan[1]);
                @endphp
                <input type="hidden" readonly value="{{ $get_jenisruangan->name_ruangan }}" class="form-control"
                       name="name_ruangan"
                       id="name_ruangan"
                       placeholder="Nama Ruangan">
                <input type="hidden" readonly value="{{ $get_jenisruangan->jenis_ruangan }}" class="form-control"
                       name="jenis_ruangan"
                       id="jenis_ruangan"
                       placeholder="Jenis Ruangan">
                <input type="text" readonly value="{{ ucfirst($get_jenisruangan->name_ruangan) }} ({{  $j_ruangan }})" class="form-control"
                       name="name_dan_jenis"
                       id="name_dan_jenis"
                       placeholder="Nama dan Jenis Ruangan Dipinjam">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div>Subbid Peminjam</div>
            <div class="input-icon mb-3 mt-2">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code"
                                         width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5"
                                         stroke="currentColor" fill="none" stroke-linecap="round"
                                         stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                                                d="M7 8l-4 4l4 4"/><path d="M17 8l4 4l-4 4"/><path
                                                d="M14 4l-4 16"/></svg>
                                </span>
                @php
                    $name_subbidpeminjam = DB::table("subbidang")->where('kode_subbid',$pinjamruangan->kode_subbid)->first()->name_subbid;

                @endphp
                <input type="text" readonly value="{{ $name_subbidpeminjam }}" class="form-control"
                       name="subbid_peminjam"
                       id="subbid_peminjam"
                       placeholder="Subbid Peminjam">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div>Pilih Persetujuan</div>
            <select  name="pilih_persetujuan_ruangan" id="pilih_persetujuan_ruangan" class="form-select input-icon mb-3 mt-2">
                <option value="">-Pilih Persetujuan-</option>
                <option {{ $pinjamruangan->status=='Pengajuan Pinjaman'?'selected':'' }} value="Pengajuan Pinjaman">Pengajuan Pinjaman</option>
                <option {{ $pinjamruangan->status=='Disetujui'?'selected':'' }} value="Disetujui">Setuju</option>
                <option {{ $pinjamruangan->status=='Ditolak'?'selected':'' }} value="Ditolak">Tolak</option>
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