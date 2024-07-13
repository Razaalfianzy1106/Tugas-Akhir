<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KKModel extends Model
{
    use HasFactory;

    protected $table = 'tb_kk';
    protected $primaryKey = 'Id_KK';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'No_KK',
        'Kepala_Keluarga',
        'Desa',
        'RT',
        'RW',
        'Kecamatan',
        'Kabupaten',
        'Provinsi'
    ];
}
