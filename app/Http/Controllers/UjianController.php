<?php

namespace App\Http\Controllers;

use App\Banksoal;
use App\Jadwalujian;
use Illuminate\Http\Request;

class UjianController extends Controller
{
    public function index_jadwalujian()
    {
        $jadwalujian = Jadwalujian::all();
        return view('dashboard.jadwal-ujian', compact('jadwalujian'));
    }

    public function tambah_jadwalujian()
    {
        return view('dashboard.tambah-jadwal-ujian');
    }

    public function posttambah_jadwalujian(Request $request)
    {
        $jadwalujian = Jadwalujian::create([
            'ujian_nama' => $request->ujian_nama,
            'ujian_jumlahsoal' => $request->ujian_jumlahsoal,
            'ujian_tanggal' => date('d-m-Y', strtotime($request->ujian_tanggal)),
            'ujian_estimasiwaktu' => $request->ujian_estimasiwaktu,
            'ujian_waktumulai' => $request->ujian_waktumulai,
            'ujian_waktuselesai' => $request->ujian_waktuselesai,
            'ujian_jenissoal' => $request->ujian_jenissoal,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $jadwalujian->save();
        return redirect()->route('jadwal-ujian');
    }
}
