<form action="#" id="frmDetailRuangan" name="frmDetailRuangan" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-12">
            <div>Kode Ruangan</div>
            <div class="input-icon mb-3">
                <div class="form-group col-lg-12"
                     style="justify-items: end;  ">
                    <div class="row m-l-1" style=" overflow: auto;  ">
                        <a class="col-12" style="text-decoration: none"
                           href="{{ $dataruangan->kode_ruangan }}"
                           target="">

                            {{ $dataruangan->kode_ruangan }}
                        </a>
                    </div>

                </div>


            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div>Nama Ruangan</div>
            <div class="input-icon mb-3">
                <div class="form-group col-lg-12"
                     style="justify-items: end;  ">
                    <div class="row m-l-1" style=" overflow: auto;  ">
                        <a class="col-12" style="text-decoration: none"
                           href="{{ $dataruangan->name_ruangan }}"
                           target="">

                            {{ $dataruangan->name_ruangan }}
                        </a>
                    </div>

                </div>


            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div>Jenis Ruangan</div>
            <div class="input-icon mb-3">
                <div class="form-group col-lg-12"
                     style="justify-items: end;  ">
                    <div class="row m-l-1" style=" overflow: auto;  ">
                        <a class="col-12" style="text-decoration: none"
                           href="{{ $dataruangan->jenis_ruangan }}"
                           target="">
                            @php
                                $explode = explode("_",$dataruangan->jenis_ruangan);
                                $j_ruangan = ucfirst($explode[0])." ".ucfirst($explode[1]);
                            @endphp
                            {{ $j_ruangan }}
                        </a>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div><center>Foto Ruangan</center></div>
            <div class="input-icon mb-3">
                <div class="form-group col-lg-12"
                     style="justify-items: end;  ">
                    <div class="row m-l-1" style=" overflow: auto;  ">
                        <center>
                            @php
                                $path = Storage::url('uploads/salamanruangan/'.$dataruangan->foto);
                            @endphp
                            @if(empty($dataruangan->foto))
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