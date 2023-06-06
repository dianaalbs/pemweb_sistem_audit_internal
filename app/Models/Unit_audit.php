<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Unit_Audit
 *
 * @property int $id_unit_audit
 * @property int $id_periode_audit
 * @property int $id_standar_ruang_lingkup
 * @property string $nama_unit
 * @property string $tanggal_audit
 * @property string $ketua_tim
 * @property string $nip_ketua_tim
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Unit_Audit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit_Audit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit_Audit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit_Audit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit_Audit whereIdPeriodeAudit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit_Audit whereIdStandarRuangLingkup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit_Audit whereIdUnitAudit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit_Audit whereKetuaTim($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit_Audit whereNamaUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit_Audit whereNipKetuaTim($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit_Audit whereTanggalAudit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit_Audit whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Unit_Audit extends Model
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
