<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $this->belongsTo(Auditee::class, 'id_auditee');
    }
}
