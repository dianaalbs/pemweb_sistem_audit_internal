<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auditor_unit extends Model
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
        return $this->belongsTo(Unit_audit::class, 'id_unit_audit');
    }
}
