<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendudukModel extends Model
{
    use HasFactory;

    protected $table = 'tb_pdd';
    protected $primaryKey = 'id_pend';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'id_pend',
        'Foto',
        'NIK',
        'Nama',
        'Tempat_Lahir',
        'Tanggal_Lahir',
        'Jenis_Kelamin',
        'Desa',
        'RT',
        'RW',
        'Agama',
        'Kawin',
        'Pekerjaan',
        'Status'
    ];
}
