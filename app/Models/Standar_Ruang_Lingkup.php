<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Standar_Ruang_Lingkup extends Model
{
    use HasFactory;

    protected $table = 'standar_ruang_lingkup';

    protected $primarykey = 'id_standar_ruang_lingkup';

    protected $timestamps = false;

    protected $fillable = [
        'id_setup_file',
        'nama_ruang_lingkup',
        'jenis_ruang_lingkup',
        'deskripsi_ruang_lingkup',
    ];

    //Relation with model setup_file
    public function setup_file()
    {
        return $this->belongsTo(setup_file::class, 'id_setup_file');
    }
}
