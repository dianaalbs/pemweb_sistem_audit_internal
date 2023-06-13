<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    //Relation with model Users()
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}

