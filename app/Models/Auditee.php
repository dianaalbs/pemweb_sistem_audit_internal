<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auditee extends Model
{
    use HasFactory;

    protected $table = 'auditee';

    protected $primarykey = 'id_auditee';

    protected $timestamps = false;

    protected $fillable = [
        'id_user',
        'nama_auditee',
        'sub_bagian',
    ];

    //Relation with model user()
    public function user()
    {
        return $this->belongsTo(user::class, 'id_user');
    }
}

