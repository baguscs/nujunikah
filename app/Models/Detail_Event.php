<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_Event extends Model
{
    protected $table = 'detail_events';
    protected $primaryKey = 'id';
    protected $fillable = ['event_id', 'vendor_id'];
    protected $guarded = ['id'];
}
