@extends('layout.master')

@section('title', 'Page Form')

@section('content')
    <div class="container">
        <form method="POST" action="/">
            @csrf
            <div class="form-group">
                <label for="inputNama">Nama</label>
                <input type="text" class="form-control" id="inputNama" name="inputNama" placeholder="nama" required>
            </div>

            <div class="form-group">
                <label for="inputNo">No.HP</label>
                <input type="number" class="form-control" id="inputNo" name="inputNo" placeholder="nomer HP" required>
            </div>

            <div class="form-group">
                <label for="inputAlamat">Alamat</label>
                <input type="text" class="form-control" id="inputAlamat" name="inputAlamat" placeholder="alamat" required>
            </div>

            <div class="form-group">
                <label for="inputJabatan">Jabatan/Status</label>
                <input type="text" class="form-control" id="inputJabatan" name="inputJabatan" placeholder="jabatan atau status" required>
            </div>
            <div class="form-group">
                <label for="inputKeperluan">Example textarea</label>
                <textarea class="form-control" id="inputKeperluan" name="inputKeperluan" rows="3" placeholder="keperluan" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

@endsection
