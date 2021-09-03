@extends('layout.master')

@section('title', 'Page Print')

@section('content')
    <div class="container mt-5">
        <h3 class="text-center text-uppercase">
            <u>
                surat permohonan
            </u>
        </h3>

        <div class="my-2">
            Yang bertanda tanggan di bawah ini :
        </div>

        <div class="row">
            <div class="col-1 text-capitalize">
                nama
            </div>
            <div class="col-11">
                <h6 class="text-capitalize font-weight-normal"><span class="mr-2">:</span>{{$tampil->nama}}</h6>
            </div>
        </div>

        <div class="row">
            <div class="col-1 text-capitalize">
                alamat
            </div>
            <div class="col-11">
                <h6 class="text-capitalize font-weight-normal"><span class="mr-2">:</span>{{$tampil->alamat}}</h6>
            </div>
        </div>

        <div class="row">
            <div class="col-1 text-capitalize">
                No HP
            </div>
            <div class="col-11">
                <h6 class="text-capitalize font-weight-normal"><span class="mr-2">:</span>{{$tampil->hp}}</h6>
            </div>
        </div>

        <div class="row">
            <div class="col-1 text-capitalize">
                Jabatan/Status
            </div>
            <div class="col-11">
                <h6 class="text-capitalize font-weight-normal"><span class="mr-2">:</span>{{$tampil->jabatan}}</h6>
            </div>
        </div>

        <div class="row">
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

                <div class="tanda-tanggan"></div>
            </div>

            <div class="col-6">
                <h6 class="text-capitalize font-weight-normal text-center">Hormat Kami</h6>
                <div class="tanda-tanggan"></div>
            </div>
        </div>
    </div>

    <script>
        // window.print();
    </script>
@endsection
