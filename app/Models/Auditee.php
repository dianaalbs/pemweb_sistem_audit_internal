<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Auditee
 *
 * @property int $id_auditee
 * @property int $id_user
 * @property string $nama_auditee
 * @property string $sub_bagian
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Users $user
 * @method static \Illuminate\Database\Eloquent\Builder|Auditee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Auditee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Auditee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Auditee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Auditee whereIdAuditee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Auditee whereIdUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Auditee whereNamaAuditee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Auditee whereSubBagian($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Auditee whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Auditee extends Model
{
    use HasFactory;

    protected $table = 'auditee';

    protected $primaryKey = 'id_auditee';

    protected $fillable = [
        'id_user',
        'nama_auditee',
        'sub_bagian'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    //Relation with model user()
    public function user()
    {
        return $this->belongsTo(Users::class, 'id_user');
    }
}

