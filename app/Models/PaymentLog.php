<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PaymentLog extends Model
{
    use HasFactory;

    protected $table = 'payment_log';

    public $timestamps = false;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable = [
        'payment_id',
        'ticket_payment_id',
        'amount_cr',
        'amount_dr',
        'first_2_digit',
        'last_4_digit',
        'transaction_id',
        'process_time',
        'transaction_time',
        'update_time',
        'result',
        'result_msg',
        'note',
        'response_reason',
        'status',
        'transation_type',
        'paid_by',
        'pp_payer_email',
        'name_on_card',
        'country',
        'approval_code',
        'ref_transaction_id',
    ];

    protected function casts(): array
    {
        return [
            'ticket_payment_id' => 'integer',
            'amount_cr' => 'decimal:2',
            'amount_dr' => 'decimal:2',
            'process_time' => 'datetime',
            'update_time' => 'datetime',
        ];
    }

    public function ticketPayment(): BelongsTo
    {
        return $this->belongsTo(TicketPayment::class, 'ticket_payment_id', 'id');
    }
}
