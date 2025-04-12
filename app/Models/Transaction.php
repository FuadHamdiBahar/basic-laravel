<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'nama_pelanggan',
        'no_meja',
        'bakso_tenes',
        'bakso_urat',
        'bakso_biasa',
        'bakso',
        'indomie_bakso_tenes',
        'indomie_bakso_urat',
        'indomie_bakso_biasa',
        'pangsit_bakso_tenes',
        'pangsit_bakso_urat',
        'pangsit_bakso_biasa',
        'pangsit_biasa',
        'es_teh',
        'es_jeruk',
        'le_minerale',
        'teh_pucuk',
        'kerubak',
        'buras',
        'kacang',
        'rempeyek',
        'jumlah',
    ];
}
