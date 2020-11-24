<?php

namespace App\Http\Controllers;

use App\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function master_peserta()
    {
        $semua_peserta = Peserta::all();
        return view('dashboard.peserta.master-peserta', [
            'semua_peserta' => $semua_peserta
        ]);
    }

    public function tambah_peserta()
    {
        return view('dashboard.peserta.tambah-peserta');
    }

    public function post_tambah_peserta(Request $request)
    {
        $data_peserta = Peserta::create([
            'peserta_nama' => $request->peserta_nama,
            'peserta_nik' => $request->peserta_nik,
            'peserta_nip' => $request->peserta_nip,
            'peserta_pangkat' => $request->peserta_pangkat,
            'peserta_jabatan' => $request->peserta_jabatan,
            'peserta_golongan' => $request->peserta_golongan,
            'peserta_telepon' => $request->peserta_telepon,
            'peserta_jeniskelamin' => $request->peserta_jeniskelamin,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $data_peserta->save();
        return redirect()->route('master-peserta');
    }

    public function detail_peserta($idpeserta)
    {
        $peserta_detail = Peserta::where('id', $idpeserta)->first();
        return view('dashboard.peserta.detail-peserta', [
            'peserta_detail' => $peserta_detail
        ]);
    }
}
