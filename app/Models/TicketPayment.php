<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TicketPayment extends Model
{
    use HasFactory;

    protected $table = 'ticket_payment';

    public $timestamps = false;

    protected $fillable = [
        'ticket_id',
        'reply_id',
        'amount',
        'payment_currency',
        'payment_des',
        'payment_id',
        'created_by',
        'refund_msg',
        'payment_method',
        'create_date',
        'process_date',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'ticket_id' => 'integer',
            'reply_id' => 'integer',
            'amount' => 'decimal:2',
            'create_date' => 'datetime',
            'process_date' => 'datetime',
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

    public function createdByUser(): BelongsTo
    {
        return $this->belongsTo(AppUser::class, 'created_by', 'id');
    }

    public function paymentLogs(): HasMany
    {
        return $this->hasMany(PaymentLog::class, 'ticket_payment_id', 'id');
    }
}
