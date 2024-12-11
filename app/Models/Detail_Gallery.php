<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_Gallery extends Model
{
    protected $table = 'detail_gallery';

    protected $fillable = [
        'event_id', 'vendor_id'
    ];

    protected $primaryKey = 'id';

    protected $guarded = ['id'];
}
