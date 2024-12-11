<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'access'];
}
