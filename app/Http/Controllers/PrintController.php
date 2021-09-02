<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Petition;

class PrintController extends Controller
{
    public function lastInputPrint() {
        $printData = Petition::orderBy('id', 'desc')->first();
//        dd($printData->nama);
        return view('print', ['tampil' => $printData]);
    }
}
