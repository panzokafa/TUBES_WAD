<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Staff extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nama_staff',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
