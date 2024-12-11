<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    const STATUS_SCHEDULED = 'scheduled';
    const STATUS_PROCESS = 'process';
    const STATUS_COMPLETED = 'completed';

    protected $table = 'events';

    protected $fillable = [
        'client_id',
        'date',
        'budget',
        'pesan',
        'status',
    ];

    protected $primaryKey = 'id';

    /**
     * Get the client that owns the Event
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
