<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setup_File extends Model
{
    use HasFactory;

    protected $table = 'setup_file';

    protected $primarykey = 'id_setup_file';

    protected $timestamps = false;

    protected $fillable = [
        'id_auditee',
        'nama_file',
        'deskripsi_file',
    ];

    //Relation with model auditee()
    public function auditee()
    {
        return $this->belongTo(auditee::class, 'id_auditee');
    }
}
