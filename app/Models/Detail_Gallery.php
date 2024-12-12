<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_Gallery extends Model
{
    protected $table = 'detail_galleries';

    protected $fillable = [
        'gallery_id', 'image'
    ];

    protected $primaryKey = 'id';

    protected $guarded = ['id'];
}
