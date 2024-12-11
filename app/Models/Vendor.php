<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    const CATEGORI_VANUE = 'Vanue';
    const CATEGORI_CATERING = 'Catering';
    const CATEGORI_DECORATION = 'Decoration';
    const CATEGORI_PHOTO_AND_VIDEO = 'Photo & Video';
    const CATEGORI_MUA = 'MUA & Attire';
    const CATEGORI_ENTERTAINMENT = 'Entertainment';

    protected $table = 'vendors';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
