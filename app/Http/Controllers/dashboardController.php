<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendudukModel;
use App\Models\KKModel;
use App\Models\LahirModel;
use App\Models\MeninggalModel;
use App\Models\PendatangModel;
use App\Models\PindahModel;

class dashboardController extends Controller
{
    public function dashboard() {

        $Jml_pdd = PendudukModel::all()->count();
        $Jml_kk = KKModel::all()->count();
        // $Jml_lhr = LahirModel::all()->count();
        // $Jml_Mti = MeninggalModel::all()->count();
        // $Jml_Dtg = PendatangModel::all()->count();
        // $Jml_Pndh = PindahModel::all()->count();
        // $Jml_lk = PendudukModel::where('Jenis_Kelamin', 'Laki-laki')->count();
        // $Jml_pr = PendudukModel::where('Jenis_Kelamin', 'Perempuan')->count();
        

        return view ('Dashboard', [
            'Jml_pdd' => $Jml_pdd,
            'Jml_kk'  => $Jml_kk,
            // 'Jml_lk'  => $Jml_lk,
            // 'Jml_pr'  => $Jml_pr,
            // 'Jml_lhr'  => $Jml_lhr,
            // 'Jml_Mti'  => $Jml_Mti,
            // 'Jml_Dtg'  => $Jml_Dtg,
            // 'Jml_Pndh'  => $Jml_Pndh,
        ]);
    }
}
