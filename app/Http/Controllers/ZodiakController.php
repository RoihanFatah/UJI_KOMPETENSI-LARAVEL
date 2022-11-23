<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZodiakController extends Controller
{
    public function index()
    {
        return view('zodiak');
    }

    public function cari(Request $request)
    {
        $tanggal = $request->tanggal;
        $bulan = $request->bulan;
        $message = "INPUT SALAH";

        if ($tanggal > 0 && $tanggal < 32 && $bulan > 0 && $bulan < 13) {
            if (($tanggal >= 21 && $tanggal <= 31 && $bulan == 3 ) || ($tanggal >= 1 && $tanggal <= 19 && $bulan == 4)) {
                $hasil = "ARIES";
            }
        } else {
            return $message;
        }
        return $hasil;
    }

}
