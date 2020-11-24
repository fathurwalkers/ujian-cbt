<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UjianController extends Controller
{
    public function index_jadwalujian()
    {
        return view('dashboard.jadwal-ujian');
    }

    public function tambah_jadwalujian()
    {
        return view('dashboard.tambah-jadwal-ujian');
    }

    public function posttambah_jadwalujian(Request $request)
    {

        return redirect()->route('jadwal-ujian');
    }
}
