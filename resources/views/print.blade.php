@extends('layout.master')

@section('title', 'Page Print')

@section('content')
    <div class="container">
        <h1>{{$tampil->nama}}</h1>
        <h1>{{$tampil->alamat}}</h1>
        <h1>{{$tampil->hp}}</h1>
        <h1>{{$tampil->jabatan}}</h1>
        <h1>{{$tampil->keperluan}}</h1>
    </div>

    <script>
        window.print();
    </script>
@endsection
