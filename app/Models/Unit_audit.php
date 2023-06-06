<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit_audit extends Model
{
    use HasFactory;

    protected $table = 'unit_audit';
    
    protected $primarykey = 'id_unit_audit';

    protected $fillable = [
        'id_periode_audit',
        'id_standar_ruang_lingkup',
        'nama_unit',
        'tanggal_audit',
        'ketua_tim',
        'nip_ketua_tim',
    ];

    protected $hiiden = [
        'created_at',
        'update_at'
    ];

    public function periode_audit()
    {
        return $this->belongsTo (Periode_audit::class, 'id_periode_audit');
    }

    public function standar_ruang_lingkup()
    {
        return $this->belongsTo (Standar_ruang_lingkup::class, 'id_standar_ruang_lingkup');
    }
}
