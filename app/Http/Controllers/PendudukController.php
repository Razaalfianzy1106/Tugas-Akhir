<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendudukModel;

class PendudukController extends Controller
{
    public function dtaPenduduk()
    {
        $dta_penduduk = PendudukModel::all();

        return view('Data.Penduduk', [
            'dta_penduduk' => $dta_penduduk
        ]);
    }

    public function tmbhPenduduk()
    {
        $desaList = PendudukModel::pluck('Desa', 'Desa');

        return view('Data.InsPenduduk', [
            'desaList' => $desaList
        ]);
    }

    public function insPenduduk(Request $request)
    {
    
        // Validate input
        $validatedData = $request->validate([
            'NIK' => 'required|string|max:255',
            'Nama' => 'required|string|max:255',
            'Tempat_Lahir' => 'required|string|max:255',
            'Tanggal_Lahir' => 'required|date',
            'Jenis_Kelamin' => 'required|string|max:255',
            'Desa' => 'required|string|max:255',
            'RT' => 'required|string|max:255',
            'RW' => 'required|string|max:255',
            'Agama' => 'required|string|max:255',
            'Kawin' => 'required|string|max:255',
            'Pekerjaan' => 'required|string|max:255',
            'Status' => 'required|string|max:255',
            'Foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Handle file upload for Foto
        $pathFoto = null;
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $namaFoto = time() . '_' . $foto->getClientOriginalName();
            $pathFoto = $foto->move('File/Penduduk/Foto', $namaFoto)->getPathname();
            $validatedData['Foto'] = $pathFoto;
        }
    
        \Log::info('File uploaded', ['pathFoto' => $pathFoto]);
    
        // Save data to database
        PendudukModel::create($validatedData);

        // Redirect to the view displaying all KK data with success message
        return redirect('/dta_penduduk')->with('success', 'Data Kartu Keluarga Berhasil Ditambahkan');
    }
    

}
