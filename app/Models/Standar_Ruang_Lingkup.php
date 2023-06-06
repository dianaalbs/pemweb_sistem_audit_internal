<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Standar_Ruang_Lingkup
 *
 * @property int $id_standar_ruang_lingkup
 * @property int $id_setup_file
 * @property string $nama_ruang_lingkup
 * @property string $jenis_ruang_lingkup
 * @property string $deskripsi_ruang_lingkup
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Setup_File $setup_file
 * @method static \Illuminate\Database\Eloquent\Builder|Standar_Ruang_Lingkup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Standar_Ruang_Lingkup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Standar_Ruang_Lingkup query()
 * @method static \Illuminate\Database\Eloquent\Builder|Standar_Ruang_Lingkup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Standar_Ruang_Lingkup whereDeskripsiRuangLingkup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Standar_Ruang_Lingkup whereIdSetupFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Standar_Ruang_Lingkup whereIdStandarRuangLingkup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Standar_Ruang_Lingkup whereJenisRuangLingkup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Standar_Ruang_Lingkup whereNamaRuangLingkup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Standar_Ruang_Lingkup whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Standar_Ruang_Lingkup extends Model
{
    use HasFactory;

    protected $table = 'standar_ruang_lingkup';

    protected $primaryKey = 'id_standar_ruang_lingkup';

    protected $fillable = [
        'id_setup_file',
        'nama_ruang_lingkup',
        'jenis_ruang_lingkup',
        'deskripsi_ruang_lingkup'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    //Relation with model setup_file
    public function setup_file()
    {
        return $this->belongsTo(Setup_file::class, 'id_setup_file');
    }
}
