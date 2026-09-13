<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TicketMeta extends Model
{
    use HasFactory;

    protected $table = 'ticket_meta';

    public $timestamps = false;

    protected $fillable = [
        'ticket_id',
        'reply_id',
        'meta_key',
        'meta_val',
    ];

    protected function casts(): array
    {
        return [
            'ticket_id' => 'integer',
            'reply_id' => 'integer',
        ];
    }

    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class, 'ticket_id', 'id');
    }

    public function reply(): BelongsTo
    {
        return $this->belongsTo(TicketReply::class, 'reply_id', 'reply_id');
    }
}
