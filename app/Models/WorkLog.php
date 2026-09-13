<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkLog extends Model
{
    use HasFactory;

    protected $table = 'work_log';

    public $timestamps = false;

    protected $fillable = [
        'ticket_id',
        'user_id',
        'note',
        'w_time',
        'entry_date',
    ];

    protected function casts(): array
    {
        return [
            'ticket_id' => 'integer',
            'w_time' => 'decimal:0',
            'entry_date' => 'datetime',
        ];
    }

    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class, 'ticket_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(AppUser::class, 'user_id', 'id');
    }
}
