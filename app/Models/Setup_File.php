<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Setup_File
 *
 * @property int $id_setup_file
 * @property int $id_auditee
 * @property string $nama_file
 * @property string $deskripsi_file
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Setup_File newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setup_File newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setup_File query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setup_File whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setup_File whereDeskripsiFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setup_File whereIdAuditee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setup_File whereIdSetupFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setup_File whereNamaFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setup_File whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Setup_File extends Model
{
    use HasFactory;

    protected $table = 'setup_file';

    protected $primaryKey = 'id_setup_file';

    protected $fillable = [
        'id_auditee',
        'nama_file',
        'deskripsi_file'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    //Relation with model auditee()
    public function auditee()
    {
        return $this->belongTo(Auditee::class, 'id_auditee');
    }
}
