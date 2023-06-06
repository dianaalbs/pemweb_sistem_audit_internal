<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Admin
 *
 * @property int $id_admin
 * @property int $id_user
 * @property string $nama
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Users $user
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereIdAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereIdUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Admin extends Model
{
    use HasFactory;
    protected $table = 'admin';

    protected $primarykey = 'id_admin';

    protected $fillable = [
        'id_user',
        'nama'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    //Relation with model Users()
    public function user()
    {
        return $this->belongsTo(Users::class, 'id_user');
    }
}
