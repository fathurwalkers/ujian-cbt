<?php

namespace App\Http\Controllers;

use App\Banksoal;
use Illuminate\Http\Request;

class BanksoalController extends Controller
{
    public function banksoal()
    {
        $bank_soal = Banksoal::all();
        return view('dashboard.banksoal.bank-soal', [
            'banksoal' => $bank_soal
        ]);
    }

    public function tambah_banksoal()
    {
        return view('dashboard.banksoal.tambah-bank-soal');
    }

    public function post_tambah_banksoal(Request $request)
    {
        $bank_soal = Banksoal::create([
            'soal_file' => $request->soal_file->store('gambar'),
            'soal_teks' => $request->soal_teks,
            'soal_opsi1' => $request->soal_opsi1,
            'soal_opsi2' => $request->soal_opsi2,
            'soal_opsi3' => $request->soal_opsi3,
            'soal_opsi4' => $request->soal_opsi4,
            'soal_opsi5' => $request->soal_opsi5,
            'soal_file1' => $request->soal_file1->store('gambar'),
            'soal_file2' => $request->soal_file2->store('gambar'),
            'soal_file3' => $request->soal_file3->store('gambar'),
            'soal_file4' => $request->soal_file4->store('gambar'),
            'soal_file5' => $request->soal_file5->store('gambar'),
            'soal_jawaban' => $request->soal_jawaban,
            'soal_bobot' => $request->soal_bobot,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // $bank_soal = Banksoal::create([
        //     'soal_file' => $request->file('soal_file')->store('gambar'),
        //     'soal_teks' => $request->soal_teks,
        //     'soal_opsi1' => $request->soal_opsi1,
        //     'soal_opsi2' => $request->soal_opsi2,
        //     'soal_opsi3' => $request->soal_opsi3,
        //     'soal_opsi4' => $request->soal_opsi4,
        //     'soal_opsi5' => $request->soal_opsi5,
        //     'soal_file1' => $request->file('soal_file1')->store('gambar'),
        //     'soal_file2' => $request->file('soal_file2')->store('gambar'),
        //     'soal_file3' => $request->file('soal_file3')->store('gambar'),
        //     'soal_file4' => $request->file('soal_file4')->store('gambar'),
        //     'soal_file5' => $request->file('soal_file5')->store('gambar'),
        //     'soal_jawaban' => $request->soal_jawaban,
        //     'soal_bobot' => $request->soal_bobot,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        $bank_soal->save();
        return redirect()->route('bank-soal');
    }

    public function detail_banksoal($idsoal)
    {
        $banksoal = Banksoal::where('id', $idsoal)->first();
        return view('dashboard.banksoal.detail-soal', [
            'banksoal' => $banksoal
        ]);
    }
}
