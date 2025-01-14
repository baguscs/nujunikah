<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    const CATEGORI_VANUE = 'Venue';
    const CATEGORI_CATERING = 'Catering';
    const CATEGORI_DECORATION = 'Decoration';
    const CATEGORI_PHOTO_AND_VIDEO = 'Photo & Video';
    const CATEGORI_MUA = 'MUA & Attire';
    const CATEGORI_ENTERTAINMENT = 'Entertainment';

    const CATEGORI = [
        self::CATEGORI_VANUE,
        self::CATEGORI_CATERING,
        self::CATEGORI_DECORATION,
        self::CATEGORI_PHOTO_AND_VIDEO,
        self::CATEGORI_MUA,
        self::CATEGORI_ENTERTAINMENT
    ];

    protected $table = 'vendors';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
