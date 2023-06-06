<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Periode_Audit
 *
 * @property int $id_periode_audit
 * @property string $tanggal_awal_audit
 * @property string $tanggal_akhir_audit
 * @property string $no_sk_tugas_audit
 * @property string $file_sk
 * @property string $tanggal_sk
 * @property string $ketua_spi
 * @property string $nip_ketua_spi
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Periode_Audit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Periode_Audit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Periode_Audit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Periode_Audit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Periode_Audit whereFileSk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Periode_Audit whereIdPeriodeAudit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Periode_Audit whereKetuaSpi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Periode_Audit whereNipKetuaSpi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Periode_Audit whereNoSkTugasAudit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Periode_Audit whereTanggalAkhirAudit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Periode_Audit whereTanggalAwalAudit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Periode_Audit whereTanggalSk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Periode_Audit whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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