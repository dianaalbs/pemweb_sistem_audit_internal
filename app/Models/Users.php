<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = 'user';

    protected $primarykey = 'id_user';

    protected $fillable = [
        'username',
        'email',
        'no_telepon',
        'role_user',
        'password'
    ];

    protected $hidden = [
        'password',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'password' => 'hashed',
    ];
}