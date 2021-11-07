<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Petition;

class FormController extends Controller
{
    public function index() {
        return view('form');
    }

    public function store(Request $request) {
//        dd($request->all());

        $formInput = new Petition;
        $formInput->nama = $request->inputNama;
        $formInput->orang = $request->inputNamaSiswa;
        $formInput->kelas = $request->inputKelas;
        $formInput->alamat = $request->inputAlamat;
        $formInput->hp = $request->inputNo;
        $formInput->jabatan = $request->inputJabatan;
        $formInput->keperluan = $request->inputKeperluan;

        $formInput->save();

        return redirect('/print');
    }
}
