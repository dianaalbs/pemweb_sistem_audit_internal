<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil_audit extends Model
{
    use HasFactory;

    protected $table = 'hasil_audit';

    protected $primarykey = 'id_hasil_audit';

    protected $fillable = [
        'id_standar_ruang_lingkup',
        'kondisi_awal',
        'dasar_evaluasi',
        'penyebab',
        'akibat',
        'feedback',
        'tanggal_kesanggupan_pembayaran',
        'rekomendasi_follow_up',
        'tindak_lanjut',
    ];

    //Relation with model standar_ruang_lingkup()
    public function standar_ruang_lingkup()
    {
        return $this->belongsTo(Standar_ruang_lingkup::class, 'id_standar_ruang_lingkup');
    }
}