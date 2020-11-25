<?php

namespace App\Http\Controllers;

use App\Assesor;
use Illuminate\Http\Request;

class AssesorController extends Controller
{
    public function master_assesor()
    {
        $assesor = Assesor::all();
        return view('dashboard.assesor.master-assesor', [
            'assesor' => $assesor
        ]);
    }

    public function tambah_assesor()
    {
        return view('dashboard.assesor.tambah-assesor');
    }

    public function posttambah_assesor(Request $request)
    {
        $data_assesor = Assesor::create([
            'assesor_nama' => $request->assesor_nama,
            'assesor_nira' => $request->assesor_nira,
            'assesor_urutan' => $request->assesor_urutan,
            'assesor_jeniskelamin' => $request->assesor_jeniskelamin,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $data_assesor->save();
        return redirect()->route('master-assesor');
    }

    public function edit_assesor($idassesor)
    {
        $assesor = Assesor::where('id', $idassesor)->first();
        return view('dashboard.assesor.edit-assesor', [
            'assesor' => $assesor
        ]);
    }

    public function update_assesor(Request $request, $idassesor)
    {
        $assesor = Assesor::where('id', $idassesor)->first()->update([
            'assesor_nama' => $request->assesor_nama,
            'assesor_nira' => $request->assesor_nira,
            'assesor_urutan' => $request->assesor_urutan,
            'assesor_jeniskelamin' => $request->assesor_jeniskelamin,
            'updated_at' => now()
        ]);
        return redirect()->route('master-assesor');
    }

    public function delete_assesor($idassesor)
    {
        $delete_assesor = Assesor::where('id', $idassesor)->first();
        $delete_assesor->forceDelete();
        return redirect()->route('master-assesor');
    }
}
