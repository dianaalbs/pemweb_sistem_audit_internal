<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Hasil_Audit
 *
 * @property int $id_hasil_audit
 * @property int $id_standar_ruang_lingkup
 * @property string $kondisi_awal
 * @property string $dasar_evaluasi
 * @property string $penyebab
 * @property string $akibat
 * @property string $feedback
 * @property string $tanggal_kesanggupan_penyelesaian
 * @property string $rekomendasi_follow_up
 * @property string $tindak_lanjut
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Standar_Ruang_Lingkup $standar_ruang_lingkup
 * @method static \Illuminate\Database\Eloquent\Builder|Hasil_Audit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hasil_Audit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hasil_Audit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Hasil_Audit whereAkibat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hasil_Audit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hasil_Audit whereDasarEvaluasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hasil_Audit whereFeedback($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hasil_Audit whereIdHasilAudit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hasil_Audit whereIdStandarRuangLingkup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hasil_Audit whereKondisiAwal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hasil_Audit wherePenyebab($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hasil_Audit whereRekomendasiFollowUp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hasil_Audit whereTanggalKesanggupanPenyelesaian($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hasil_Audit whereTindakLanjut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hasil_Audit whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Hasil_Audit extends Model
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
        return $this->belongsTo(Standar_Ruang_Lingkup::class, 'id_standar_ruang_lingkup');
    }
}