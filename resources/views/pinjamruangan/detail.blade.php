<form action="#" id="frmDetailRuangan" name="frmDetailRuangan" enctype="multipart/form-data">
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
                <input type="text" readonly value="{{ $datapinjamruangan->kode_booking }}" class="form-control"
                       name="kode_booking_pinjam_detail"
                       id="kode_booking_pinjam_detail"
                       placeholder="Kode Booking">
                <input type="hidden" readonly value="{{ $datapinjamruangan->id }}" class="form-control"
                       name="id_kodebooking_pinjam_detail"
                       id="id_kodebooking_pinjam_detail"
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
                <input type="text" readonly value="{{ $datapinjamruangan->perihal_pinjaman }}" class="form-control"
                       name="perihal_pinjam_detail"
                       id="perihal_pinjam_detail"
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

                    $dari = $datapinjamruangan->mulai_tgl;
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

                <input type="text" readonly value="{{ $complete_tgl_mulai }}" class="form-control"
                       name="mulai_tgl_pinjam_detail"
                       id="mulai_tgl_pinjam_detail"
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

                    $sampai = $datapinjamruangan->sampai_tgl;
                    $explode_sampai = explode('-', $sampai);
                    $tgl_sampai = $explode_sampai[2];
                    $bulan_sampai = $explode_sampai[1];
                    if (substr($bulan_sampai, 0, 1) == 0) {
                        $bulan_sampai = substr($bulan_sampai, 1, 1);
                    } else if (substr($bulan_sampai, 0, 1) == 1) {
                        $bulan_sampai = substr($bulan_sampai, 0, 2);
                    }

                        $tahun_sampai = $explode_sampai[0];

                $complete_tgl_sampai = $tgl_sampai."-".$namabulan[$bulan_sampai]."-".$tahun_sampai;

                @endphp

                <input type="text" readonly value="{{ $complete_tgl_sampai }}" class="form-control"
                       name="mulai_tgl_pinjam"
                       id="mulai_tgl_pinjam"
                       placeholder="Mulai Tanggal">
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
                <input type="text" readonly value="{{ $datapinjamruangan->kode_ruangan }}" class="form-control"
                       name="kode_ruangan_dipinjam_detail"
                       id="kode_ruangan_dipinjam_detail"
                       placeholder="Kode Ruangan Dipinjam">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div>Jenis Ruangan </div>
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
                    $get_jenisruangan = DB::table('ruangan')->where('kode_ruangan', $datapinjamruangan->kode_ruangan)->first();
                    $explode_jenis_ruangan = explode('_',$get_jenisruangan->jenis_ruangan);
                    $j_ruangan = ucfirst($explode_jenis_ruangan[0])." ".ucfirst($explode_jenis_ruangan[1]);
                @endphp
                <input type="text" readonly value="{{ $j_ruangan }}" class="form-control"
                       name="jenis_ruangan_detail"
                       id="jenis_ruangan_detail"
                       placeholder="Jenis Ruangan Dipinjam">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div>Persetujuan</div>
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
                <input type="text" readonly value="{{ $datapinjamruangan->status }}" class="form-control"
                       name="persetujuan_pinjam_detail"
                       id="persetujuan_pinjam_detail"
                       placeholder="Persetujuan Pinjaman">
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
                    $name_subbidpeminjam = DB::table("subbidang")->where('kode_subbid',$datapinjamruangan->kode_subbid)->first()->name_subbid;
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
            <div><center>File Data Dukung</center></div>
            <div class="input-icon mb-3">
                <div class="form-group col-lg-12"
                     style="justify-items: end;  ">
                    <div class="row m-l-1" style=" overflow: auto;  ">
                        <center>
                            @php
                                $folderLampiran = Storage::url("public/uploads/datadukungruangan/" .json_decode($datapinjamruangan->datadukung)) ;
                            @endphp
                            <a  style="text-decoration: none" href="{{ $folderLampiran }}"
                                target="_blank">
                                <!--                                                <i class="fa fa-check-square m-l-0" style="margin-right: 10px"></i>-->
                                {{ json_decode($datapinjamruangan->datadukung) }}
                            </a>
                        </center>
                    </div>

                </div>

            </div>
        </div>
    </div>

</form>