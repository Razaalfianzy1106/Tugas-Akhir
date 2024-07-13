<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KKModel;
use App\Models\PendudukModel;

class KKController extends Controller
{
    public function dtaKK()
    {
        // Retrieve all KK data
        $dta_kk = KKModel::all();

        // Return view with data
        return view('Data.KK', [
            'dta_kk' => $dta_kk
        ]);
    }

    public function tmbhKK()
    {
        // Retrieve list of villages (Desa) from PendudukModel
        $desaList = PendudukModel::pluck('Desa', 'Desa');

        // Return view for adding KK data, passing the desaList
        return view('Data.InsKK', [
            'desaList' => $desaList
        ]);
    }

    public function insKK(Request $request)
    {
        // Validate input
        $validatedData = $request->validate([
            'No_KK' => 'required|string|max:255',
            'Kepala_Keluarga' => 'required|string|max:255',
            'Desa' => 'required|string|max:255', // Assuming Desa is a string field
            'RT' => 'required|string|max:255',
            'RW' => 'required|string|max:255',
            'Kecamatan' => 'required|string|max:255',
            'Kabupaten' => 'required|string|max:255',
            'Provinsi' => 'required|string|max:255',
            'Foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle file upload for Foto
        if ($request->hasFile('Foto')) {
            $foto = $request->file('Foto');
            $namaFoto = time() . '_' . $foto->getClientOriginalName();
            $pathFoto = $foto->move('File/KK/Foto', $namaFoto)->getPathname();
            $validatedData['Foto'] = $pathFoto;
        }

        // Create new KKModel instance and save to database
        KKModel::create($validatedData);

        // Redirect to the view displaying all KK data with success message
        return redirect('/dta_kk')->with('success', 'Data Kartu Keluarga Berhasil Ditambahkan');
    }
}
