<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TicketReply extends Model
{
    use HasFactory;

    protected $table = 'ticket_reply';

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable = [
        'ticket_id',
        'reply_id',
        'asigned_by',
        'replied_by',
        'replied_by_type',
        'reply_text',
        'reply_time',
        'ticket_status',
        'is_private',
        'payment_id',
        'is_user_seen',
        'seen_time',
    ];

    protected function casts(): array
    {
        return [
            'ticket_id' => 'integer',
            'reply_id' => 'integer',
            'reply_time' => 'datetime',
            'payment_id' => 'integer',
            'seen_time' => 'datetime',
        ];
    }

    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class, 'ticket_id', 'id');
    }

    public function assignedByUser(): BelongsTo
    {
        return $this->belongsTo(AppUser::class, 'asigned_by', 'id');
    }

    public function repliedByUser(): BelongsTo
    {
        return $this->belongsTo(AppUser::class, 'replied_by', 'id');
    }

    public function repliedBySiteUser(): BelongsTo
    {
        return $this->belongsTo(SiteUser::class, 'replied_by', 'id');
    }

    public function payment(): BelongsTo
    {
        return $this->belongsTo(TicketPayment::class, 'payment_id', 'id');
    }

    public function meta(): HasMany
    {
        return $this->hasMany(TicketMeta::class, 'reply_id', 'reply_id');
    }
}
