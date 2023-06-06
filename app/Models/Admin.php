<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
