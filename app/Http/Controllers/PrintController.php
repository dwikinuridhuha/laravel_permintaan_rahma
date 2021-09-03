<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Petition;

class PrintController extends Controller
{
    public function lastInputPrint() {
        setlocale (LC_TIME, 'id_ID');

        $printData = Petition::orderBy('id', 'desc')->first();
        $tanggalSekarang = date("d F Y");

        return view('print', ['tampil' => $printData, 'tanggalSekarang' => $tanggalSekarang]);
    }
}
