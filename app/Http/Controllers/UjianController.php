<?php

namespace App\Http\Controllers;

use App\Banksoal;
use App\Jadwalujian;
use App\Nomorujian;
use App\Peserta;
use App\PesertaUjian;
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

    public function laporanujian()
    {
        return view('dashboard.laporan-ujian');
    }

    public function master_nomorujian()
    {
        $nomorujian = Nomorujian::all();
        return view('dashboard.nomorujian.master-nomor-ujian', [
            'nomorujian' => $nomorujian
        ]);
    }

    public function tambah_nomorujian()
    {
        return view('dashboard.nomorujian.tambah-nomor-ujian');
    }

    public function post_nomorujian(Request $request)
    {
        $nomorujian = Nomorujian::create([
            'nomorujian' => $request->nomorujian,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect()->route('master-nomor-ujian');
    }

    public function edit_nomorujian($idnomorujian)
    {
        $nomorujian = Nomorujian::where('id', $idnomorujian)->first();
        return view('dashboard.nomorujian.edit-nomor-ujian', [
            'nomorujian' => $nomorujian
        ]);
    }

    public function update_nomorujian(Request $request, $idnomorujian)
    {
        $nomorujian = Nomorujian::where('id', $idnomorujian)->first()->update([
            'nomorujian' => $request->nomorujian,
            'updated_at' => now()
        ]);
        return redirect()->route('master-nomor-ujian');
    }

    public function delete_nomorujian($idnomorujian)
    {
        $delete_nomorujian = Nomorujian::where('id', $idnomorujian)->first();
        $delete_nomorujian->forceDelete();
        return redirect()->route('master-nomor-ujian');
    }

    public function index_prosesujian()
    {
        $nomorujian = Nomorujian::all();
        $peserta = Peserta::all();
        return view('prosesujian.index', [
            'nomorujian' => $nomorujian,
            'peserta' => $peserta
        ]);
    }

    public function postindex_prosesujian(Request $request)
    {
        $nomorujian_match = Nomorujian::where('nomorujian', $request->nomorujian)->first();
        $peserta_match = Peserta::where('peserta_nip', $request->peserta_nip)->first();
        $peserta_ujian_match = PesertaUjian::where('nomorujian_id', $nomorujian_match->id && 'peserta_id', $peserta_match->id)->first();

        if ($peserta_ujian_match) {
            return redirect('/');
        }

        if ($nomorujian_match) {
            if ($peserta_match) {
                $pesertaujian = PesertaUjian::create([
                    'nomorujian_id' => $nomorujian_match->id,
                    'peserta_id' => $peserta_match->id,
                    'tanggal_masuk' => now(),
                    'waktu_masuk' => now(),
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
                $pesertaujian->pesertaujian_peserta()->associate($peserta_match->id);
                $pesertaujian->pesertaujian_nomorujian()->associate($nomorujian_match->id);
                return redirect()->route('persiapan-proses-ujian', [
                    'peserta_id' => $peserta_match->id
                ]);
            }
        }
        return back()->with('status_error', 'Nomor Ujian / NIP sudah dipakai atau tidak ada')->withInput();
    }

    public function persiapan_prosesujian($peserta_id)
    {
        $peserta_ujian = PesertaUjian::where('peserta_id', $peserta_id)->first();
        $peserta = Peserta::where('id', $peserta_id)->first();
        $nomorujian = Nomorujian::where('id', $peserta_ujian->nomorujian_id)->first();
        if ($peserta_ujian) {
            return view('prosesujian.persiapan', [
                'peserta_ujian' => $peserta_ujian,
                'peserta' => $peserta,
                'nomorujian' => $nomorujian
            ]);
        }
        return back();
    }
}
