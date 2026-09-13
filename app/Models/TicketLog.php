<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TicketLog extends Model
{
    use HasFactory;

    protected $table = 'ticket_log';

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable = [
        'ticket_id',
        'log_id',
        'log_by',
        'log_by_type',
        'log_msg',
        'ticket_status',
        'entry_time',
    ];

    protected function casts(): array
    {
        return [
            'ticket_id' => 'integer',
            'log_id' => 'integer',
            'entry_time' => 'datetime',
        ];
    }

    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class, 'ticket_id', 'id');
    }

    public function logByUser(): BelongsTo
    {
        return $this->belongsTo(AppUser::class, 'log_by', 'id');
    }

    public function logBySiteUser(): BelongsTo
    {
        return $this->belongsTo(SiteUser::class, 'log_by', 'id');
    }
}
