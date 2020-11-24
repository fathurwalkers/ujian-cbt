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
            'peserta_nip' => $request->peserta_nip,
            'peserta_pangkat' => $request->peserta_pangkat,
            'peserta_golongan' => $request->peserta_golongan,
            'peserta_jabatan' => $request->peserta_jabatan,
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

    public function edit_peserta($idpeserta)
    {
        $peserta = Peserta::where('id', $idpeserta)->first();
        return view('dashboard.peserta.edit-peserta', [
            'peserta' => $peserta
        ]);
    }

    public function update_peserta(Request $request, $idpeserta)
    {
        $peserta_update = Peserta::where('id', $idpeserta)->first()->update([
            'peserta_nama' => $request->peserta_nama,
            'peserta_nip' => $request->peserta_nip,
            'peserta_pangkat' => $request->peserta_pangkat,
            'peserta_golongan' => $request->peserta_golongan,
            'peserta_jabatan' => $request->peserta_jabatan,
            'updated_at' => now()
        ]);
        return redirect()->route('master-peserta');
    }

    public function delete_peserta($idpeserta)
    {
        $delete_peserta = Peserta::where('id', $idpeserta)->first();
        $delete_peserta->forceDelete();
        return redirect()->route('master-peserta');
    }
}
