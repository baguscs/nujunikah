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

    /**
     * Get the user associated with the Client
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function event()
    {
        return $this->hasOne(Event::class);
    }
}
