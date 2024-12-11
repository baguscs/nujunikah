<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
        'email',
        'status',
    ];

    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
