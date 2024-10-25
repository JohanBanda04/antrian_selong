<form action="#" id="frmDetailKendaraan" name="frmDetailKendaraan" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-12">
            <div>Kode Kendaraan</div>
            <div class="input-icon mb-3">
                <div class="form-group col-lg-12"
                     style="justify-items: end;  ">
                    <div class="row m-l-1" style=" overflow: auto;  ">
                        <a class="col-12" style="text-decoration: none"
                           href="{{ $datakendaraan->kode_kendaraan }}"
                           target="">

                            {{ $datakendaraan->kode_kendaraan }}
                        </a>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div>Nama Kendaraan</div>
            <div class="input-icon mb-3">
                <div class="form-group col-lg-12"
                     style="justify-items: end;  ">
                    <div class="row m-l-1" style=" overflow: auto;  ">
                        <a class="col-12" style="text-decoration: none"
                           href="{{ $datakendaraan->name_kendaraan }}"
                           target="">

                            {{ $datakendaraan->name_kendaraan }}
                        </a>
                    </div>

                </div>


            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div>Plat Kendaraan</div>
            <div class="input-icon mb-3">
                <div class="form-group col-lg-12"
                     style="justify-items: end;  ">
                    <div class="row m-l-1" style=" overflow: auto;  ">
                        <a class="col-12" style="text-decoration: none"
                           href="{{ $datakendaraan->plat_kendaraan }}"
                           target="">

                            {{ $datakendaraan->plat_kendaraan }}
                        </a>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div>Jenis Kendaraan</div>
            <div class="input-icon mb-3">
                <div class="form-group col-lg-12"
                     style="justify-items: end;  ">
                    <div class="row m-l-1" style=" overflow: auto;  ">
                        <a class="col-12" style="text-decoration: none"
                           href="{{ $datakendaraan->jenis_kendaraan }}"
                           target="">

                            {{ ucfirst($datakendaraan->jenis_kendaraan) }}
                        </a>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div><center>Foto Kendaraan</center></div>
            <div class="input-icon mb-3">
                <div class="form-group col-lg-12"
                     style="justify-items: end;  ">
                    <div class="row m-l-1" style=" overflow: auto;  ">
                        <center>
                            @php
                                $path = Storage::url('uploads/salaman/'.$datakendaraan->foto);
                            @endphp
                            @if(empty($datakendaraan->foto))
                                <img style="width: 300px; height: 300px" src="{{ url('assets/img/no-photo.png') }}" class="avatar"
                                     alt="">
                            @else
                                <img style="width: 300px; height: 300px" src="{{ url($path) }}" class="avatar" alt="">
                            @endif

                        </center>
                    </div>

                </div>


            </div>
        </div>
    </div>

</form>