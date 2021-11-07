@extends('layout.master')

@section('title', 'Page Print')

@section('content')
    <div class="container mt-5">
        <h3 class="text-center text-uppercase">
            <u>
                surat permohonan
            </u>
        </h3>

        <div class="ukuran-font">
            <div class="spasi-baris">
                Yang bertanda tanggan di bawah ini :
            </div>

            <div class="row spasi-baris">
                <div class="col-1 text-capitalize">
                    nama
                </div>
                <div class="col-11">
                    <h6 class="text-capitalize font-weight-normal"><span class="mr-2">:</span>{{$tampil->nama}}</h6>
                </div>
            </div>

            <div class="row spasi-baris">
                <div class="col-1 text-capitalize">
                    No HP
                </div>
                <div class="col-11">
                    <h6 class="text-capitalize font-weight-normal"><span class="mr-2">:</span>{{$tampil->hp}}</h6>
                </div>
            </div>

            <div class="row spasi-baris">
                <div class="col-1 text-capitalize">
                    alamat
                </div>
                <div class="col-11">
                    <h6 class="text-capitalize font-weight-normal"><span class="mr-2">:</span>{{$tampil->alamat}}</h6>
                </div>
            </div>

            <div class="row spasi-baris">
                <div class="col-1 text-capitalize">
                    Nama Siswa
                </div>
                <div class="col-11">
                    <h6 class="text-capitalize font-weight-normal"><span class="mr-2">:</span>{{$tampil->orang}}</h6>
                </div>
            </div>

            <div class="row spasi-baris">
                <div class="col-1 text-capitalize">
                    kelas
                </div>
                <div class="col-11">
                    <h6 class="text-capitalize font-weight-normal"><span class="mr-2">:</span>{{$tampil->kelas}}</h6>
                </div>
            </div>

            <div class="row spasi-baris">
                <div class="col-1 text-capitalize">
                    Jabatan/Status
                </div>
                <div class="col-11">
                    <h6 class="text-capitalize font-weight-normal"><span class="mr-2">:</span>{{$tampil->jabatan}}</h6>
                </div>
            </div>

            <div class="row spasi-baris">
                <div class="col-1 text-capitalize">
                    <span>Keperluan</span>
                </div>

                <div class="col-11">
                    <h6 class="text-capitalize font-weight-normal"><span class="mr-2">:</span></h6>
                </div>

                <div class="col-12 ml-3">
                    <h6 class="text-capitalize font-weight-normal">{{$tampil->keperluan}}</h6>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-12">
                    <h6 class="text-capitalize font-weight-normal text-right">Jombang, {{ $tanggalSekarang }}</h6>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-6">
                    <h6 class="text-capitalize font-weight-normal text-center">Yang Menerima</h6>

                    <hr class="tanda-tanggan" />
                </div>

                <div class="col-6">
                    <h6 class="text-capitalize font-weight-normal text-center">Hormat Kami</h6>
                    <hr class="tanda-tanggan" />
                </div>
            </div>
        </div>
    </div>

    <script>
        // window.print();
    </script>
@endsection
