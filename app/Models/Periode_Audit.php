<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periode_Audit extends Model
{
    use HasFactory;
    protected $table = 'periode_audit';

    protected $primarykey = 'id_periode_audit';

    protected $fillable = [
        'tanggal_awal_audit',
        'tanggal_akhir_audit',
        'no_sk_tugas_audit',
        'file_sk',
        'tanggal_sk',
        'ketua_spi',
        'nip_ketua_spi'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

}