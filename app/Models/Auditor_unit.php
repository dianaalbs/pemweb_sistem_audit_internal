<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\Auditor_Unit
 *
 * @property int $id_auditor
 * @property int $id_user
 * @property int $id_unit_audit
 * @property string $nama_auditor
 * @property string $nip_auditor
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Unit_Audit $unit_audit
 * @property-read \App\Models\Users $user
 * @method static \Illuminate\Database\Eloquent\Builder|Auditor_Unit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Auditor_Unit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Auditor_Unit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Auditor_Unit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Auditor_Unit whereIdAuditor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Auditor_Unit whereIdUnitAudit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Auditor_Unit whereIdUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Auditor_Unit whereNamaAuditor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Auditor_Unit whereNipAuditor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Auditor_Unit whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Auditor_Unit extends Model
{
    use HasFactory;

    protected $table = 'auditor_unit';

    protected $primarykey = 'id_auditor';

    protected $fillable = [
        'id_user',
        'id_unit_audit',
        'nama_auditor',
        'nip_auditor'
    ];

    protected $hidden = [
        'created_at',
        'update_at'
    ];

    //Relation with user
    public function user ()
    {
        return $this->belongsTo(Users::class, 'id_user');
    }

    //Relation with Unit_audit
    public function unit_audit()
    {
        return $this->belongsTo(Unit_Audit::class, 'id_unit_audit');
    }
}
