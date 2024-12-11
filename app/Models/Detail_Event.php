<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_Event extends Model
{
    protected $table = 'detail_event';
    protected $primaryKey = 'id';
    protected $fillable = ['client_id', 'date', 'budget', 'pesan', 'status'];
    protected $guarded = ['id'];
}
