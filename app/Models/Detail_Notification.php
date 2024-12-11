<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_Notification extends Model
{
    protected $table = 'detail_notification';
    protected $guarded = ['id'];
    protected $fillable = ['notification_id', 'file', 'judul'];
    protected $primaryKey = 'id';

}
